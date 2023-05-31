<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageSensitiveFileListResponseBody;

use AlibabaCloud\Tea\Model;

class sensitiveFileList extends Model
{
    /**
     * @description The number of scans that are performed on the sensitive file.
     *
     * @example 9
     *
     * @var int
     */
    public $count;

    /**
     * @description The timestamp when the first scan was performed. Unit: milliseconds.
     *
     * @example 1663321552000
     *
     * @var int
     */
    public $firstScanTime;

    /**
     * @description The timestamp when the last scan was performed. Unit: milliseconds.
     *
     * @example 1663321552000
     *
     * @var int
     */
    public $lastScanTime;

    /**
     * @description The risk level. Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example high
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The alert type for the sensitive file. Valid values:
     *
     *   **npm_token**: npm access token
     *   **ftp_cfg**: FTP configuration
     *   **google\_oauth_key**: Google OAuth key
     *   **planetscale_passwd**: PlanetScale password
     *   **github\_ssh_key**: GitHub SSH key
     *   **msbuild\_publish_profile**: MSBuild publish profile
     *   **fastly\_cdn_token**: Fastly CDN token
     *   **ssh\_private_key**: SSH private key
     *   **aws_cli**: AWS CLI credential
     *   **cpanel_proftpd**: cPanel ProFTPD credential
     *   **postgresql_passwd**: PostgreSQL password file
     *   **discord\_client_cred**: Discord client credential
     *   **rails_database**: Rails database configuration
     *   **aws\_access_key**: AWS access key
     *   **esmtp_cfg** :configuration of ESMTP
     *   **docker\_registry_cfg**: configuration of a Docker image repository
     *   **pem**: PEM
     *   **common_cred**: common credential
     *   **sftp_cfg**: SFTP connection configuration
     *   **grafana_token**: Grafana token
     *   **slack_token**: Slack token
     *   **ec\_private_key**: EC private key
     *   **pypi_token**: upload token for the PyPI
     *   **finicity_token**: Finicity token
     *   **k8s\_client_key**: Kubernetes private key
     *   **git_cfg**: Git configuration
     *   **django_key**: Django key
     *   **jenkins_ssh**: Jenkins SSH configuration file
     *   **openssh\_private_key**: OpenSSL private key
     *   **square_oauth**: OAuth credential for Square
     *   **typeform_token**: Typeform token
     *   **common\_database_cfg**: general database connection configuration
     *   **wordpress\_database_cfg**: WordPress database configuration
     *   **googlecloud\_api_key**: API key for Google Cloud
     *   **vscode_sftp**: VSCode SFTP configuration
     *   **apache_htpasswd**: Apache htpasswd
     *   **planetscale_token**: PlanetScale token
     *   **contentful\_preview_token**: preview token for Contentful
     *   **php\_database_cfg**: database password for a PHP application
     *   **atom\_remote_sync**: Atom remote synchronization configuration
     *   **aws\_session_token**: AWS session token
     *   **atom\_sftp_cfg**: Atom SFTP configuration
     *   **tencentcloud_ak**: Asana client key
     *   **tencentcloud_ak**: secret ID of a third-party cloud
     *   **rsa\_private_key**: RSA private key
     *   **github\_personal_token**: personal access token for GitHub
     *   **pgp**: PGP encrypted file
     *   **stripe_skpk**: Stripe secret key
     *   **square_token**: Square access token
     *   **rails_carrierwave**: file upload credential for Rails Carrierwave
     *   **dbeaver\_database_cfg**: DBeaver database configuration
     *   **robomongo_cred**: credential for RoboMongo
     *   **github\_oauth_token**: OAuth access token for GitHub
     *   **pulumi_token**: Pulumi token
     *   **ventrilo_voip**: configuration of a Ventrilo VoIP server
     *   **macos_keychain**: macOS keychain
     *   **amazon\_mws_token**: Amazon MWS token
     *   **dynatrace_token**: Dynatrace token
     *   **java_keystore**: JKS
     *   **microsoft_sdf**: Microsoft SQL Server CE database
     *   **kubernetes\_dashboard_cred**: user credential for Kubernetes Dashboard
     *   **atlassian_token**: Atlassian token
     *   **rdp**: RDP
     *   **mailgun_key**: Mailgun webhook signing key
     *   **mailchimp\_api_key**: API key for Mailchimp
     *   **netrc_cfg**: .netrc configuration file
     *   **openvpn_cfg**: OpenVPN configuration
     *   **github\_refresh_token**: GitHub refresh token
     *   **salesforce**: Salesforce credential
     *   **salesforce**: Sendinblue credential
     *   **pkcs\_private_key**: PKCS#12 key
     *   **rubyonrails_passwd**: Ruby on Rails password file
     *   **filezilla_ftp**: FileZilla FTP configuration
     *   **databricks_token**: Databricks token
     *   **gitLab\_personal_toke**: personal access token for GitLab
     *   **rails\_master_key**: Rails master key
     *   **sqlite**: SQLite3 or SQLite database
     *   **firefox_logins**: Firefox logon configuration
     *   **mailgun\_private_token**: Mailgun private token
     *   **joomla_cfg**: Joomla configuration
     *   **hashicorp\_terraform_token**: HashiCorp Terraform token
     *   **jetbrains_ides**: JetBrains IDEs configuration
     *   **heroku\_api_key**: Heroku API key
     *   **messagebird_token**: MessageBird token
     *   **messagebird_token**: MessageBird token
     *   **hashicorp\_vault_token**: HashiCorp Vault token
     *   **pgp\_private_key**: PGP private key
     *   **sshpasswd**: SSH password
     *   **huaweicloud_ak**: secret access key of a third-party cloud
     *   **aws_s3cmd**: AWS S3cmd configuration
     *   **php_config**: PHP configuration
     *   **common\_private_key**: private key of a common type
     *   **microsoft_mdf**: Microsoft SQL Server database
     *   **mediawiki_cfg**: MediaWiki configuration
     *   **jenkins_cred**: Jenkins credential
     *   **rubygems_cred**: RubyGems credential
     *   **clojars_token**: Clojars token
     *   **phoenix\_web_passwd**: Phoenix web credential
     *   **puttygen\_private_key**: PuTTYgen private key
     *   **google\_oauth_token**: Google OAuth access token
     *   **rubyonrails_cfg**: Ruby On Rails database configuration
     *   **lob\_api_key**: Lob API key
     *   **pkcs_cred**: PKCS#12 certificate
     *   **otr\_private_key**: OTR private key
     *   **contentful\_delivery_token**: delivery token for Contentful
     *   **digital\_ocean_tugboat**: DigitalOcean Tugboat configuration
     *   **dsa\_private_key**: Digital DSA private key
     *   **rails\_app_token**: Rails app token
     *   **git_cred**: Git user credential
     *   **newrelic\_api_key**: User API key for New Relic
     *   **github_hub**: hub configuration for storing GitHub tokens
     *   **rubygem**: RubyGem token
     *
     * @example google_oauth_key
     *
     * @var string
     */
    public $sensitiveFileKey;

    /**
     * @description The name of the alert type for the sensitive file.
     *
     * @example AccessKeyLeak
     *
     * @var string
     */
    public $sensitiveFileName;
    protected $_name = [
        'count'             => 'Count',
        'firstScanTime'     => 'FirstScanTime',
        'lastScanTime'      => 'LastScanTime',
        'riskLevel'         => 'RiskLevel',
        'sensitiveFileKey'  => 'SensitiveFileKey',
        'sensitiveFileName' => 'SensitiveFileName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->firstScanTime) {
            $res['FirstScanTime'] = $this->firstScanTime;
        }
        if (null !== $this->lastScanTime) {
            $res['LastScanTime'] = $this->lastScanTime;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->sensitiveFileKey) {
            $res['SensitiveFileKey'] = $this->sensitiveFileKey;
        }
        if (null !== $this->sensitiveFileName) {
            $res['SensitiveFileName'] = $this->sensitiveFileName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sensitiveFileList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['FirstScanTime'])) {
            $model->firstScanTime = $map['FirstScanTime'];
        }
        if (isset($map['LastScanTime'])) {
            $model->lastScanTime = $map['LastScanTime'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['SensitiveFileKey'])) {
            $model->sensitiveFileKey = $map['SensitiveFileKey'];
        }
        if (isset($map['SensitiveFileName'])) {
            $model->sensitiveFileName = $map['SensitiveFileName'];
        }

        return $model;
    }
}
