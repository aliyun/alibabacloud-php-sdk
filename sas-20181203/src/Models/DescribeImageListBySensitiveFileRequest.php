<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageListBySensitiveFileRequest extends Model
{
    /**
     * @description The number of the page to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The image digest.
     * > Fuzzy match is supported.
     * @example v005
     *
     * @var string
     */
    public $imageDigest;

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
     * @description The number of entries to return on each page. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the container image.
     *
     * > You can call the [ListRepository](~~ListRepository~~) operation to query the IDs of container images from the value of the InstanceId response parameter.
     * @example i-qewqrqcsadf****
     *
     * @var string
     */
    public $repoInstanceId;

    /**
     * @description The name of the image repository.
     *
     * > Fuzzy match is supported.
     * @example harbor-image-v001
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The namespace to which the image repository belongs.
     * > Fuzzy match is supported.
     * @example libssh2
     *
     * @var string
     */
    public $repoNamespace;

    /**
     * @description The risk level of the file. Separate multiple levels with commas (,). Valid values:
     *
     * - **high**
     * - **medium**
     * - **low**
     * @example high
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description An array consisting of the types of the assets that you want to scan. Valid values:
     * - **image**
     * - **container**
     * @var string[]
     */
    public $scanRange;

    /**
     * @description The alert type of the sensitive file. Valid values:
     *
     *   **npm_token**: NPM Token
     *   **ftp_cfg**: FTP Config
     *   **google\_oauth_key**: Google OAuth Key
     *   **planetscale_passwd**: Planetscale password
     *   **github\_ssh_key**: Github SSH Key
     *   **msbuild\_publish_profile**: MSBuild publish profile
     *   **fastly\_cdn_token**: Fastly CDN Token
     *   **ssh\_private_key**: SSH Private Key
     *   **aws_cli**: AWS CLI Credentials
     *   **cpanel\_proftpd**: cPanel ProFTPd Credential
     *   **postgresql_passwd**: PostgreSQl Passwd
     *   **discord\_client_cred**: Discord Client Credential
     *   **rails_database**: Rails Database Config
     *   **aws\_access_key**: AWS Access Key
     *   **esmtp_cfg**: ESMTP Config
     *   **docker\_registry_cfg**: Docker Registry Config
     *   **pem**: PEM
     *   **common_cred**: Common Credential
     *   **sftp_cfg**: SFTP Config
     *   **grafana_token**: Grafana Token
     *   **slack_token**: Slack Token
     *   **ec\_private_key**: EC Private Key
     *   **pypi_token**: PyPI Token
     *   **finicity_token**: Finicity Token
     *   **k8s\_client_key**: Kubernetes Client Key
     *   **git_cfg**: Git Config
     *   **django_key**: Django Key
     *   **jenkins_ssh**: Jenkins SSH Config
     *   **openssh\_private_key**: OPENSSH Private Key
     *   **square_oauth**: Square OAuth Token
     *   **typeform_token**: Typeform Token
     *   **common\_database_cfg**: Common Database Config
     *   **wordpress\_database_cfg**: Wordpress Database Config
     *   **googlecloud\_api_key**: Google Cloud API Key
     *   **vscode_sftp**: VSCode SFTP Config
     *   **apache_htpasswd**: Apache htpasswd
     *   **planetscale_token**: Planetscale Token
     *   **contentful\_preview_token**: Contentful Preview Token
     *   **php\_database_cfg**: PHP Database Config
     *   **atom\_remote_sync**: Atom Remote Sync Config
     *   **aws\_session_token**: AWS Session Token
     *   **atom\_sftp_cfg**: Atom SFTP Config
     *   **asana\_client\_private_key**: Asana Client Private Key
     *   **tencentcloud_ak**: Tencent Cloud SecretId
     *   **rsa\_private_key**: RSA Private Key
     *   **github\_personal_token**: Github Personal Token
     *   **pgp**: PGP
     *   **stripe_skpk**: Stripe Secret Key
     *   **square_token**: Square Token
     *   **rails_carrierwave**: Rails Carrierwave Credential
     *   **dbeaver\_database_cfg**: DBeaver Database Config
     *   **robomongo_cred**: Robomongo Credential
     *   **github\_oauth_token**: Github OAuth Token
     *   **pulumi_token**: Pulumi Token
     *   **ventrilo_voip**: Ventrilo VoIP Server Config
     *   **macos_keychain**: macOS Keychain
     *   **amazon\_mws_token**: Amazon MWS Token
     *   **dynatrace_token**: Dynatrace Token
     *   **java_keystore**: Java Keystore
     *   **microsoft_sdf**: Microsoft SDF
     *   **kubernetes\_dashboard_cred**: Kubernetes Dashboard User Credential
     *   **atlassian_token**: Atlassian Token
     *   **rdp**: RDP
     *   **mailgun_key**: Mailgun Webhook Signing Key
     *   **mailchimp\_api_key**: Mailchimp API Key
     *   **netrc_cfg**: .netrc config
     *   **openvpn_cfg**: OpenVPN Config
     *   **github\_refresh_token**: Github Refresh Token
     *   **salesforce**: Salesforce Credential
     *   **sendinblue**: Sendinblue Token
     *   **pkcs\_private_key**: PKCS Private Key
     *   **rubyonrails_passwd**: Ruby on Rails Passwd
     *   **filezilla_ftp**: FileZilla FTP Config
     *   **databricks_token**: Databricks Token
     *   **gitLab\_personal_token**: GitLab Personal Token
     *   **rails\_master_key**: Rails Master Key
     *   **sqlite**: SQLite3/SQLite Database
     *   **firefox_logins**: Firefox Login Config
     *   **mailgun\_private_token**: Mailgun Private Token
     *   **joomla_cfg**: Joomla Config
     *   **hashicorp\_terraform_token**: Hashicorp Terraform Token
     *   **jetbrains_ides**: Jetbrains IDEs Config
     *   **heroku\_api_key**: Heroku API key
     *   **messagebird_token**: MessageBird Token
     *   **github\_app_token**: Github App Token
     *   **hashicorp\_vault_token**: Hashicorp Vault Token
     *   **pgp\_private_key**: PGP Private Key
     *   **sshpasswd**: SSH password
     *   **huaweicloud_ak**: Huaei Cloud Access Key
     *   **aws_s3cmd**: AWS S3cmd Config
     *   **php_config**: php Config
     *   **common\_private_key**: Common Private Key Type
     *   **microsoft_mdf**: Microsoft MDF
     *   **mediawiki_cfg**: MediaWiki Config
     *   **jenkins_cred**: Jenkins Credential
     *   **rubygems_cred**: Rubygems Credential
     *   **clojars_token**: Clojars Token
     *   **phoenix\_web_passwd**: Phoenix Web Credential
     *   **puttygen\_private_key**: PuTTYgen Private Key
     *   **google\_oauth_token**: Google Oauth Token
     *   **rubyonrails_cfg**: Ruby On Rails Database Config
     *   **lob\_api_key**: Lob API Key
     *   **pkcs_cred**: PKCS#12
     *   **otr\_private_key**: OTR Private Key
     *   **contentful\_delivery_token**: Contentful Delivery Token
     *   **digital\_ocean_tugboat**: Digital Ocean Tugboat Config
     *   **dsa\_private_key**: DSA Private Key
     *   **rails\_app_token**: Rails App Token
     *   **git_cred**: Git User Credential
     *   **newrelic\_api_key**: New Relic User API Key
     *   **github_hub**: Github Token
     *   **rubygem**: Rubygem Token
     *
     * @example sshpasswd
     *
     * @var string
     */
    public $sensitiveFileKey;
    protected $_name = [
        'currentPage'      => 'CurrentPage',
        'imageDigest'      => 'ImageDigest',
        'lang'             => 'Lang',
        'pageSize'         => 'PageSize',
        'repoInstanceId'   => 'RepoInstanceId',
        'repoName'         => 'RepoName',
        'repoNamespace'    => 'RepoNamespace',
        'riskLevel'        => 'RiskLevel',
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
        if (null !== $this->imageDigest) {
            $res['ImageDigest'] = $this->imageDigest;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->repoInstanceId) {
            $res['RepoInstanceId'] = $this->repoInstanceId;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->repoNamespace) {
            $res['RepoNamespace'] = $this->repoNamespace;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
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
     * @return DescribeImageListBySensitiveFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['ImageDigest'])) {
            $model->imageDigest = $map['ImageDigest'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RepoInstanceId'])) {
            $model->repoInstanceId = $map['RepoInstanceId'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RepoNamespace'])) {
            $model->repoNamespace = $map['RepoNamespace'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
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
