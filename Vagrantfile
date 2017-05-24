Vagrant.configure("2") do |config|

  # リナックスバージョン確認
  # 1. CentOS　https://ja.wikipedia.org/wiki/CentOS
  # cat /etc/redhat-release
  # 2. Ubuntu
  # cat /etc/lsb-release
  # 3. Debian
  # cat /etc/debian_version
  # 4. Fedore
  # cat /etc/fedora-release

  config.vm.box = "bento/centos-7.2"
  config.vm.box_check_update = false
  # config.vm.box_url

  # 1. プライベートネットワーク 「ホストオンリーアダプタ」 - ホストOSとゲストOS間でのみ通信が行える
  # 2. ポートフォワーディング - ホストOSの特定のポート → ゲストOSに転送する
  # 3. パブリックネットワーク 「ブリッジアダプター」 - 同一ネットワーク内のどの端末からでもゲストOSと通信が行える

  # config.vm.network "public_network"
  # config.vm.network "forwarded_port", guest: 80, host: 8080
  config.vm.network "private_network", ip: "192.168.33.10"

  # ホストOSとゲストOSのフォルダを同期
  config.vm.synced_folder ".", "/vagrant", owner: "root", group: "root", mount_options: ['dmode=777','fmode=777']

    # Ansible 設定
  config.vm.provision "ansible_local" do |ansible|

    ansible.playbook          = "provision/site.yml"    # 必須。VM 上での Playbook のパスを指定。下記、provisioning_pathからの相対パスでも、絶対パスでも可。
    ansible.install           = true                    # Ansible を自動インストールするかどうか。デフォルトは、true。
    ansible.verbose           = true                    # ansible-playbook 実行時に詳細出力するかどうか。vの数が多ければ、より詳細出力になる。（ansible-playbook -v 相当）
    ansible.inventory_path    = "provision/hosts"       # インベントリパス。
    ansible.limit             = "all"                   # ansible-playbook を実行するホストやグループ指定（ansible-playbook --limit相当）
    # ansible.provisioning_path = "/vagrant"              # ansible-playbookコマンドを実行するパス。デフォルトは、/vagrant。
    # ansible.tmp_path          = ""                      # プロビジョナが利用する一時ファイルの置き場。デフォルトは、/tmp/vagrant-ansible。|ansible.version|string|想定している Ansible バージョン。デフォルトは、バージョンチェックしない。
  end

  # バーチャルマシン(VirtualBox, VMware など)固有の設定
  config.vm.provider "virtualbox" do |v|
    v.cpus = 2
    v.memory = 4096
    v.linked_clone = true # 差分ディスクのみを作成する ことでディスク全体のコピーを行う場合に比べてインポートの速度を劇的に改善する機能
    v.customize [
      "modifyvm", :id,
      "--hwvirtex", "on",
      "--nestedpaging", "on",
      "--largepages", "on",
      "--ioapic", "on",
      "--pae", "on",
      "--paravirtprovider", "kvm",  # 準仮想化を有効化(VirtualBox 5.0)
    ]

  end
end
