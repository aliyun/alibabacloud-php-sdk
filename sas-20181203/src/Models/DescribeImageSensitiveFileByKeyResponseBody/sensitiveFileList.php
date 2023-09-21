<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageSensitiveFileByKeyResponseBody;

use AlibabaCloud\Tea\Model;

class sensitiveFileList extends Model
{
    /**
     * @description The suggestion.
     *
     * @example Assess risks based on business conditions, remove risky content, and rebuild image
     *
     * @var string
     */
    public $advice;

    /**
     * @description The file path.
     *
     * @example /usr/lib/abc.txt
     *
     * @var string
     */
    public $filePath;

    /**
     * @description The timestamp generated when the first scan was performed. Unit: milliseconds.
     *
     * @example 1663321552000
     *
     * @var int
     */
    public $firstScanTime;

    /**
     * @description The timestamp generated when the last baseline check was performed. Unit: milliseconds.
     *
     * @example 1663691592000
     *
     * @var int
     */
    public $lastScanTime;

    /**
     * @description The digest of the image layer.
     *
     * @example 0083a31cc0083a31ccf7c10367a6e783e8601e290f7c10367a6e783e860****
     *
     * @var string
     */
    public $layerDigest;

    /**
     * @description The sensitive content.
     *
     * @example AKPIDteow289f9s************
     *
     * @var string
     */
    public $promt;

    /**
     * @description The risk level. Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example low
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The type of alerts for the sensitive files. Valid values:
     *
     *   **npm_token**: NPM access token
     *   **ftp_cfg**: FTP configuration
     *   **google_oauth_key**: Google OAuth key
     *   **planetscale_passwd**: PlanetScale password
     *   **github_ssh_key** :Github SSH key
     *   **msbuild_publish_profile**: MSBuild publish profile
     *   **fastly_cdn_token**: Fastly CDN token
     *   **ssh_private_key**: SSH private key
     *   **aws_cli**: AWS CLI credentials
     *   **cpanel_proftpd**: cPanel ProFTPD credentials
     *   **postgresql_passwd**: PostgreSQL password file
     *   **discord_client_cred**: Discord client credentials
     *   **rails_database**: Rails database configuration
     *   **aws_access_key**: AWS access key
     *   **esmtp_cfg**: ESMTP configuration
     *   **docker_registry_cfg**: configuration of a Docker image repository
     *   **pem**: PEM
     *   **common_cred**: common credential
     *   **sftp_cfg**: SFTP connection configuration
     *   **grafana_token**: Grafana token
     *   **slack_token**: Slack token
     *   **ec_private_key**: EC private key
     *   **pypi_token**: upload token for the PyPI
     *   **finicity_token**: Finicity token
     *   **k8s_client_key**: Kubernetes private key
     *   **git_cfg**: Git configuration
     *   **django_key**: Django key
     *   **jenkins_ssh**: Jenkins SSH configuration file
     *   **openssh_private_key**: OpenSSL private key
     *   **square_oauth**: OAuth credential for Square
     *   **typeform_token**: Typeform token
     *   **common_database_cfg**: general database connection configuration
     *   **wordpress_database_cfg**: WordPress database configuration
     *   **googlecloud_api_key**: API key for Google Cloud
     *   **vscode_sftp**: VSCode SFTP configuration
     *   **apache_htpasswd**: Apache htpasswd
     *   **planetscale_token**: PlanetScale token
     *   **contentful_preview_token**: preview token for Contentful
     *   **php_database_cfg**: database password for a PHP application
     *   **atom_remote_sync**: Atom remote synchronization configuration
     *   **aws_session_token**: AWS session token
     *   **atom_sftp_cfg**: Atom SFTP configuration
     *   **asana_client_private_key** :Asana client key
     *   **tencentcloud_ak**: secret ID of a third-party cloud
     *   **rsa_private_key**: RSA private key
     *   **github_personal_token**: personal access token for GitHub
     *   **pgp**: PGP encrypted file
     *   **stripe_skpk**: Stripe secret key
     *   **square_token**: Square access token
     *   **rails_carrierwave**: Rails Carrierwave credential
     *   **dbeaver_database_cfg**: DBeaver database configuration
     *   **robomongo_cred**: credential for RoboMongo
     *   **github_oauth_token**: OAuth access token for GitHub
     *   **pulumi_token**: Pulumi token
     *   **ventrilo_voip**: configuration of a Ventrilo VoIP server
     *   **macos_keychain**: macOS keychain
     *   **amazon_mws_token**: Amazon MWS token
     *   **dynatrace_token**: Dynatrace token
     *   **java_keystore**: JKS
     *   **microsoft_sdf**: Microsoft SQL Server CE database
     *   **kubernetes_dashboard_cred**: user credential for Kubernetes Dashboard
     *   **atlassian_token**: Atlassian token
     *   **rdp**: RDP
     *   **mailgun_key**: Mailgun webhook signing key
     *   **mailchimp_api_key**: API key for Mailchimp
     *   **netrc_cfg**: .netrc configuration file
     *   **openvpn_cfg**: OpenVPN configuration
     *   **github_refresh_token**: GitHub refresh token
     *   **salesforce**: Salesforce credentials
     *   **salesforce**: Sendinblue credentials
     *   **pkcs_private_key**: PKCS#12 key
     *   **rubyonrails_passwd**: Ruby on Rails password file
     *   **filezilla_ftp**: FileZilla FTP configuration
     *   **databricks_token**: Databricks token
     *   **gitLab_personal_toke**: personal access token for GitLab
     *   **rails_master_key**: Rails master key
     *   **sqlite**: SQLite3 or SQLite database
     *   **firefox_logins**: Firefox logon configuration
     *   **mailgun_private_token**: Mailgun private token
     *   **joomla_cfg**: Joomla configuration
     *   **hashicorp_terraform_token**: HashiCorp Terraform token
     *   **jetbrains_ides**: JetBrains IDEs configuration
     *   **heroku_api_key**: Heroku API key
     *   **messagebird_token**: MessageBird token
     *   **messagebird_token**: MessageBird token
     *   **hashicorp_vault_token**: HashiCorp Vault token
     *   **pgp_private_key**: PGP private key
     *   **sshpasswd**: SSH password
     *   **huaweicloud_ak**: secret access key of a third-party cloud
     *   **aws_s3cmd**: AWS S3cmd configuration
     *   **php_config**: PHP configuration
     *   **common_private_key**: private key of a common type
     *   **microsoft_mdf**: Microsoft SQL Server database
     *   **mediawiki_cfg**: MediaWiki configuration
     *   **jenkins_cred**: Jenkins credentials
     *   **rubygems_cred**: RubyGems credentials
     *   **clojars_token**: Clojars token
     *   **phoenix_web_passwd**: Phoenix web credentials
     *   **puttygen_private_key**: PuTTYgen private key
     *   **google_oauth_token**: Google OAuth access token
     *   **rubyonrails_cfg**: Ruby On Rails database configuration
     *   **lob_api_key**: Lob API key
     *   **pkcs_cred**: PKCS#12 certificate
     *   **otr_private_key**: OTR private key
     *   **contentful_delivery_token**: delivery token for Contentful
     *   **digital_ocean_tugboat**: DigitalOcean Tugboat configuration
     *   **dsa_private_key**: Digital DSA private key
     *   **rails_app_token**: Rails app token
     *   **git_cred**: Git user credentials
     *   **newrelic_api_key**: User API key for New Relic
     *   **github_hub**: hub configuration for storing GitHub tokens
     *   **rubygem**: Rubygem Token
     *
     * @example google_oauth_key
     *
     * @var string
     */
    public $sensitiveFileKey;

    /**
     * @description The alert type name of the sensitive file.
     *
     * @example Google OAuth Key
     *
     * @var string
     */
    public $sensitiveFileName;
    protected $_name = [
        'advice'            => 'Advice',
        'filePath'          => 'FilePath',
        'firstScanTime'     => 'FirstScanTime',
        'lastScanTime'      => 'LastScanTime',
        'layerDigest'       => 'LayerDigest',
        'promt'             => 'Promt',
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
        if (null !== $this->advice) {
            $res['Advice'] = $this->advice;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->firstScanTime) {
            $res['FirstScanTime'] = $this->firstScanTime;
        }
        if (null !== $this->lastScanTime) {
            $res['LastScanTime'] = $this->lastScanTime;
        }
        if (null !== $this->layerDigest) {
            $res['LayerDigest'] = $this->layerDigest;
        }
        if (null !== $this->promt) {
            $res['Promt'] = $this->promt;
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
        if (isset($map['Advice'])) {
            $model->advice = $map['Advice'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['FirstScanTime'])) {
            $model->firstScanTime = $map['FirstScanTime'];
        }
        if (isset($map['LastScanTime'])) {
            $model->lastScanTime = $map['LastScanTime'];
        }
        if (isset($map['LayerDigest'])) {
            $model->layerDigest = $map['LayerDigest'];
        }
        if (isset($map['Promt'])) {
            $model->promt = $map['Promt'];
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
