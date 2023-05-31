<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageSensitiveFileListShrinkRequest extends Model
{
    /**
     * @description The value of the sensitive file type.
     *
     * @example Rails Master Key
     *
     * @var string
     */
    public $criteria;

    /**
     * @description The query type of sensitive files. Valid values:
     *
     *   **SensitiveFileKey**: the alert type for sensitive files. Valid values:
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
     *   **esmtp_cfg** :configuration of Extended Simple Mail Transfer Protocol (ESMTP)
     *   **docker\_registry_cfg**: configuration of a Docker image repository
     *   **pem**: Privacy-Enhanced Mail (PEM)
     *   **common_cred**: common credential
     *   **sftp_cfg**: SFTP connection configuration
     *   **grafana_token**: Grafana token
     *   **slack_token**: Slack token
     *   **ec\_private_key**: EC private key
     *   **pypi_token**: upload token for the Python Package Index (PyPI)
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
     *   **pgp**: Pretty Good Privacy (PGP) encrypted file
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
     *   **java_keystore**: Java KeyStore (JKS)
     *   **microsoft_sdf**: Microsoft SQL Server Compact Edition (CE) database
     *   **kubernetes\_dashboard_cred**: user credential for Kubernetes Dashboard
     *   **atlassian_token**: Atlassian token
     *   **rdp**: remote desktop protocol (RDP)
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
     *   **otr\_private_key**: Off-the-Record Messaging (OTR) private key
     *   **contentful\_delivery_token**: delivery token for Contentful
     *   **digital\_ocean_tugboat**: DigitalOcean Tugboat configuration
     *   **dsa\_private_key**: Digital Signature Algorithm (DSA) private key
     *   **rails\_app_token**: Rails app token
     *   **git_cred**: Git user credential
     *   **newrelic\_api_key**: User API key for New Relic
     *   **github_hub**: hub configuration for storing GitHub tokens
     *   **rubygem**: RubyGem token
     *
     *   **SensitiveFileName**: the name of the alert type for sensitive files.
     *
     * @example SensitiveFileKey
     *
     * @var string
     */
    public $criteriaType;

    /**
     * @description The number of the page to return. Pages start from page **1**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The UUID of the image.
     *
     * >  You can call the [DescribeGroupedContainerInstances](~~DescribeGroupedContainerInstances~~) operation to query the UUIDs of images from the value of the **ImageUuid** response parameter.
     * @example 850613a48999900f48417c7e6e9dcfdd
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
     * @description The number of entries to return on each page. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

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
     * @description An array that consists of the types of the assets that you want to scan. Valid values:
     *
     *   **image**
     *   **container**
     *
     * @var string
     */
    public $scanRangeShrink;
    protected $_name = [
        'criteria'        => 'Criteria',
        'criteriaType'    => 'CriteriaType',
        'currentPage'     => 'CurrentPage',
        'imageUuid'       => 'ImageUuid',
        'lang'            => 'Lang',
        'pageSize'        => 'PageSize',
        'riskLevel'       => 'RiskLevel',
        'scanRangeShrink' => 'ScanRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }
        if (null !== $this->criteriaType) {
            $res['CriteriaType'] = $this->criteriaType;
        }
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
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->scanRangeShrink) {
            $res['ScanRange'] = $this->scanRangeShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageSensitiveFileListShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }
        if (isset($map['CriteriaType'])) {
            $model->criteriaType = $map['CriteriaType'];
        }
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
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['ScanRange'])) {
            $model->scanRangeShrink = $map['ScanRange'];
        }

        return $model;
    }
}
