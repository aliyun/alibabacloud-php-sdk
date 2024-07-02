<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageSensitiveFileListResponseBody;

use AlibabaCloud\Tea\Model;

class sensitiveFileList extends Model
{
    /**
     * @var string
     */
    public $advice;

    /**
     * @description The key of the sensitive file type.
     *
     * @example password
     *
     * @var string
     */
    public $classKey;

    /**
     * @description The name of the sensitive file type.
     *
     * @example password
     *
     * @var string
     */
    public $className;

    /**
     * @description The number of scans that are performed on the sensitive file.
     *
     * @example 9
     *
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $description;

    /**
     * @description The timestamp generated when the first scan was performed. Unit: milliseconds.
     *
     * @example 1663321552000
     *
     * @var int
     */
    public $firstScanTime;

    /**
     * @description The timestamp generated when the last scan was performed. Unit: milliseconds.
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
     * @description The type of the alert for the sensitive file. Valid values:
     *
     *   **npm_token**: Node Package Manager (NPM) access token.
     *   **ftp_cfg**: FTP configuration.
     *   **google_oauth_key**: Google OAuth key.
     *   **planetscale_passwd**: PlanetScale password.
     *   **github_ssh_key**: GitHub SSH key.
     *   **msbuild_publish_profile**: MSBuild publish profile.
     *   **fastly_cdn_token**: Fastly CDN token.
     *   **ssh_private_key**: SSH private key.
     *   **aws_cli**: Amazon Web Services (AWS) CLI credential.
     *   **cpanel_proftpd**: cPanel ProFTPD credential.
     *   **postgresql_passwd**: PostgreSQL password file.
     *   **discord_client_cred**: Discord client credential.
     *   **rails_database**: Rails database configuration.
     *   **aws_access_key**: AWS access key.
     *   **esmtp_cfg**: Extended Simple Mail Transfer Protocol (ESMTP) configuration.
     *   **docker_registry_cfg**: Docker image repository configuration.
     *   **pem**: Privacy-Enhanced Mail (PEM).
     *   **common_cred**: common credential.
     *   **sftp_cfg**: Secure File Transfer Protocol (SFTP) connection configuration.
     *   **grafana_token**: Grafana token.
     *   **slack_token**: Slack token.
     *   **ec_private_key**: EC private key.
     *   **pypi_token**: upload token for the Python Package Index (PyPI).
     *   **finicity_token**: Finicity token.
     *   **k8s_client_key**: Kubernetes client private key.
     *   **git_cfg**: Git configuration.
     *   **django_key**: Django key.
     *   **jenkins_ssh**: Jenkins SSH configuration file.
     *   **openssh_private_key**: OpenSSH private key.
     *   **square_oauth**: OAuth credential for Square.
     *   **typeform_token**: Typeform token.
     *   **common_database_cfg**: general database connection configuration.
     *   **wordpress_database_cfg**: WordPress database configuration.
     *   **googlecloud_api_key**: API key for Google Cloud.
     *   **vscode_sftp**: VS Code SFTP configuration.
     *   **apache_htpasswd**: Apache htpasswd.
     *   **planetscale_token**: PlanetScale token.
     *   **contentful_preview_token**: preview token for Contentful.
     *   **php_database_cfg**: database password for a PHP application.
     *   **atom_remote_sync**: Atom remote synchronization configuration.
     *   **aws_session_token**: AWS session token.
     *   **atom_sftp_cfg**: Atom SFTP configuration.
     *   **asana_client_private_key**: Asana client key.
     *   **tencentcloud_ak**: secret ID of a third-party cloud.
     *   **rsa_private_key**: Rivest-Shamir-Adleman (RSA) private key.
     *   **github_personal_token**: personal access token for GitHub.
     *   **pgp**: Pretty Good Privacy (PGP) encrypted file.
     *   **stripe_skpk**: Stripe secret key.
     *   **square_token**: Square access token.
     *   **rails_carrierwave**: file upload credential for Rails Carrierwave.
     *   **dbeaver_database_cfg**: DBeaver database configuration.
     *   **robomongo_cred**: Robomongo credential.
     *   **github_oauth_token**: OAuth access token for GitHub.
     *   **pulumi_token**: Pulumi token.
     *   **ventrilo_voip**: Ventrilo VoIP server configuration.
     *   **macos_keychain**: macOS keychain.
     *   **amazon_mws_token**: Amazon MWS token.
     *   **dynatrace_token**: Dynatrace token.
     *   **java_keystore**: Java KeyStore (JKS).
     *   **microsoft_sdf**: Microsoft SQL Server Compact Edition (CE) database.
     *   **kubernetes_dashboard_cred**: user credential for Kubernetes Dashboard.
     *   **atlassian_token**: Atlassian token.
     *   **rdp**: remote desktop protocol (RDP).
     *   **mailgun_key**: Mailgun webhook signing key.
     *   **mailchimp_api_key**: API key for Mailchimp.
     *   **netrc_cfg**: .netrc configuration file.
     *   **openvpn_cfg**: OpenVPN client configuration.
     *   **github_refresh_token**: GitHub refresh token.
     *   **salesforce**: Salesforce credential.
     *   **sendinblue**: Sendinblue token.
     *   **pkcs_private_key**: PKCS#12 key.
     *   **rubyonrails_passwd**: Ruby on Rails password file.
     *   **filezilla_ftp**: FileZilla FTP configuration.
     *   **databricks_token**: Databricks token.
     *   **gitLab_personal_token**: personal access token for GitLab.
     *   **rails_master_key**: Rails master key.
     *   **sqlite**: SQLite3 or SQLite database.
     *   **firefox_logins**: Firefox logon configuration.
     *   **mailgun_private_token**: Mailgun private token.
     *   **joomla_cfg**: Joomla configuration.
     *   **hashicorp_terraform_token**: HashiCorp Terraform token.
     *   **jetbrains_ides**: JetBrains IDEs configuration.
     *   **heroku_api_key**: Heroku API key.
     *   **messagebird_token**: MessageBird token.
     *   **github_app_token**: GitHub app token.
     *   **hashicorp_vault_token**: HashiCorp Vault token.
     *   **pgp_private_key**: PGP private key.
     *   **sshpasswd**: SSH password.
     *   **huaweicloud_ak**: secret access key of a third-party cloud.
     *   **aws_s3cmd**: AWS S3cmd configuration.
     *   **php_config**: PHP configuration.
     *   **common_private_key**: private key of a common type.
     *   **microsoft_mdf**: Microsoft SQL Server database.
     *   **mediawiki_cfg**: MediaWiki configuration.
     *   **jenkins_cred**: Jenkins credential.
     *   **rubygems_cred**: RubyGems credential.
     *   **clojars_token**: Clojars token.
     *   **phoenix_web_passwd**: Phoenix web credential.
     *   **puttygen_private_key**: PuTTYgen private key.
     *   **google_oauth_token**: Google OAuth access token.
     *   **rubyonrails_cfg**: Ruby on Rails database configuration.
     *   **lob_api_key**: Lob API key.
     *   **pkcs_cred**: PKCS#12 certificate.
     *   **otr_private_key**: Off-the-Record Messaging (OTR) private key.
     *   **contentful_delivery_token**: delivery token for Contentful.
     *   **digital_ocean_tugboat**: DigitalOcean Tugboat configuration.
     *   **dsa_private_key**: Digital Signature Algorithm (DSA) private key.
     *   **rails_app_token**: Rails app token.
     *   **git_cred**: Git user credential.
     *   **newrelic_api_key**: user API key for New Relic.
     *   **github_hub**: hub configuration for storing GitHub tokens.
     *   **rubygem**: RubyGems token.
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

    /**
     * @description The number of unprocessed mirrors.
     *
     * @example 2
     *
     * @var int
     */
    public $unprocessedNum;
    protected $_name = [
        'advice'            => 'Advice',
        'classKey'          => 'ClassKey',
        'className'         => 'ClassName',
        'count'             => 'Count',
        'description'       => 'Description',
        'firstScanTime'     => 'FirstScanTime',
        'lastScanTime'      => 'LastScanTime',
        'riskLevel'         => 'RiskLevel',
        'sensitiveFileKey'  => 'SensitiveFileKey',
        'sensitiveFileName' => 'SensitiveFileName',
        'unprocessedNum'    => 'UnprocessedNum',
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
        if (null !== $this->classKey) {
            $res['ClassKey'] = $this->classKey;
        }
        if (null !== $this->className) {
            $res['ClassName'] = $this->className;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->unprocessedNum) {
            $res['UnprocessedNum'] = $this->unprocessedNum;
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
        if (isset($map['ClassKey'])) {
            $model->classKey = $map['ClassKey'];
        }
        if (isset($map['ClassName'])) {
            $model->className = $map['ClassName'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['UnprocessedNum'])) {
            $model->unprocessedNum = $map['UnprocessedNum'];
        }

        return $model;
    }
}
