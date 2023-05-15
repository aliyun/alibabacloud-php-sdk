<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageSensitiveFileByKeyRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The UUID of the image.
     *
     * @example 0083a31ccf7c10367a6e783e8601****
     *
     * @var string
     */
    public $imageUuid;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries to return on each page. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the asset that you want to scan. Valid values:
     *
     *   **image**
     *   **container**
     *
     * @var string[]
     */
    public $scanRange;

    /**
     * @description The alert type of the sensitive file. Valid values:
     *
     *   **npm_token**: NPM Token
     *   **ftp_cfg**: FTP Config
     *   **google_oauth_key**: Google OAuth Key
     *   **planetscale_passwd**: Planetscale password
     *   **github_ssh_key**: Github SSH Key
     *   **msbuild_publish_profile**: MSBuild publish profile
     *   **fastly_cdn_token**: Fastly CDN Token
     *   **ssh_private_key**: SSH Private Key
     *   **aws_cli**: AWS CLI Credentials
     *   **cpanel_proftpd**: cPanel ProFTPd Credential
     *   **postgresql_passwd**: PostgreSQl Passwd
     *   **discord_client_cred**: Discord Client Credential
     *   **rails_database**: Rails Database Config
     *   **aws_access_key**: AWS Access Key
     *   **esmtp_cfg**: ESMTP Config
     *   **docker_registry_cfg**: Docker Registry Config
     *   **pem**: PEM
     *   **common_cred**: Common Credential
     *   **sftp_cfg**: SFTP Config
     *   **grafana_token**: Grafana Token
     *   **slack_token**: Slack Token
     *   **ec_private_key**: EC Private Key
     *   **pypi_token**: PyPI Token
     *   **finicity_token**: Finicity Token
     *   **k8s_client_key**: Kubernetes Client Key
     *   **git_cfg**: Git Config
     *   **django_key**: Django Key
     *   **jenkins_ssh**: Jenkins SSH Config
     *   **openssh_private_key**: OPENSSH Private Key
     *   **square_oauth**: Square OAuth Token
     *   **typeform_token**: Typeform Token
     *   **common_database_cfg**: Common Database Config
     *   **wordpress_database_cfg**: Wordpress Database Config
     *   **googlecloud_api_key**: Google Cloud API Key
     *   **vscode_sftp**: VSCode SFTP Config
     *   **apache_htpasswd**: Apache htpasswd
     *   **planetscale_token**: Planetscale Token
     *   **contentful_preview_token**: Contentful Preview Token
     *   **php_database_cfg**: PHP Database Config
     *   **atom_remote_sync**: Atom Remote Sync Config
     *   **aws_session_token**: AWS Session Token
     *   **atom_sftp_cfg**: Atom SFTP Config
     *   **asana_client_private_key**: Asana Client Private Key
     *   **tencentcloud_ak**: Tencent Cloud SecretId
     *   **rsa_private_key**: RSA Private Key
     *   **github_personal_token**: Github Personal Token
     *   **pgp**: PGP
     *   **stripe_skpk**: Stripe Secret Key
     *   **square_token**: Square Token
     *   **rails_carrierwave**: Rails Carrierwave Credential
     *   **dbeaver_database_cfg**: DBeaver Database Config
     *   **robomongo_cred**: Robomongo Credential
     *   **github_oauth_token**: Github OAuth Token
     *   **pulumi_token**: Pulumi Token
     *   **ventrilo_voip**: Ventrilo VoIP Server Config
     *   **macos_keychain**: macOS Keychain
     *   **amazon_mws_token**: Amazon MWS Token
     *   **dynatrace_token**: Dynatrace Token
     *   **java_keystore**: Java Keystore
     *   **microsoft_sdf**: Microsoft SDF
     *   **kubernetes_dashboard_cred**: Kubernetes Dashboard User Credential
     *   **atlassian_token**: Atlassian Token
     *   **rdp**: RDP
     *   **mailgun_key**: Mailgun Webhook Signing Key
     *   **mailchimp_api_key**: Mailchimp API Key
     *   **netrc_cfg**: .netrc config
     *   **openvpn_cfg**: OpenVPN Config
     *   **github_refresh_token**: Github Refresh Token
     *   **salesforce**: Salesforce Credential
     *   **sendinblue**: Sendinblue Token
     *   **pkcs_private_key**: PKCS Private Key
     *   **rubyonrails_passwd**: Ruby on Rails Passwd
     *   **filezilla_ftp**: FileZilla FTP Config
     *   **databricks_token**: Databricks Token
     *   **gitLab_personal_token**: GitLab Personal Token
     *   **rails_master_key**: Rails Master Key
     *   **sqlite**: SQLite3/SQLite Database
     *   **firefox_logins**: Firefox Login Config
     *   **mailgun_private_token**: Mailgun Private Token
     *   **joomla_cfg**: Joomla Config
     *   **hashicorp_terraform_token**: Hashicorp Terraform Token
     *   **jetbrains_ides**: Jetbrains IDEs Config
     *   **heroku_api_key**: Heroku API key
     *   **messagebird_token**: MessageBird Token
     *   **github_app_token**: Github App Token
     *   **hashicorp_vault_token**: Hashicorp Vault Token
     *   **pgp_private_key**: PGP Private Key
     *   **sshpasswd**: SSH password
     *   **huaweicloud_ak**: Huaei Cloud Access Key
     *   **aws_s3cmd**: AWS S3cmd Config
     *   **php_config**: php Config
     *   **common_private_key**: Common Private Key Type
     *   **microsoft_mdf**: Microsoft MDF
     *   **mediawiki_cfg**: MediaWiki Config
     *   **jenkins_cred**: Jenkins Credential
     *   **rubygems_cred**: Rubygems Credential
     *   **clojars_token**: Clojars Token
     *   **phoenix_web_passwd**: Phoenix Web Credential
     *   **puttygen_private_key**: PuTTYgen Private Key
     *   **google_oauth_token**: Google Oauth Token
     *   **rubyonrails_cfg**: Ruby On Rails Database Config
     *   **lob_api_key**: Lob API Key
     *   **pkcs_cred**: PKCS#12
     *   **otr_private_key**: OTR Private Key
     *   **contentful_delivery_token**: Contentful Delivery Token
     *   **digital_ocean_tugboat**: Digital Ocean Tugboat Config
     *   **dsa_private_key**: DSA Private Key
     *   **rails_app_token**: Rails App Token
     *   **git_cred**: Git User Credential
     *   **newrelic_api_key**: New Relic User API Key
     *   **github_hub**: Github Token
     *   **rubygem**: Rubygem Token
     *
     * @example google_oauth_key
     *
     * @var string
     */
    public $sensitiveFileKey;
    protected $_name = [
        'currentPage'      => 'CurrentPage',
        'imageUuid'        => 'ImageUuid',
        'lang'             => 'Lang',
        'pageSize'         => 'PageSize',
        'scanRange'        => 'ScanRange',
        'sensitiveFileKey' => 'SensitiveFileKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->imageUuid) {
            $res['ImageUuid'] = $this->imageUuid;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->scanRange) {
            $res['ScanRange'] = $this->scanRange;
        }
        if (null !== $this->sensitiveFileKey) {
            $res['SensitiveFileKey'] = $this->sensitiveFileKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageSensitiveFileByKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['ImageUuid'])) {
            $model->imageUuid = $map['ImageUuid'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ScanRange'])) {
            if (!empty($map['ScanRange'])) {
                $model->scanRange = $map['ScanRange'];
            }
        }
        if (isset($map['SensitiveFileKey'])) {
            $model->sensitiveFileKey = $map['SensitiveFileKey'];
        }

        return $model;
    }
}
