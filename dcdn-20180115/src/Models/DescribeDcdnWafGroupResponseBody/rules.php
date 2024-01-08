<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafGroupResponseBody;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description The type of the application. Valid values:
     *
     *   **0**: Common
     *   **1**: WordPress
     *   **2**: DedeCMS
     *   **3**: Discuz
     *   **4**: PHP CMS
     *   **5**: ECShop
     *   **6**: ShopEX
     *   **7**: Drupal
     *   **8**: Joomla
     *   **9**: MetInfo
     *   **10**: Struts2
     *   **11**: Spring Boot
     *   **12**: JBoss
     *   **13**: WebLogic
     *   **14**: WebSphere
     *   **15**: Tomcat
     *   **16**: Elastic Search
     *   **18**: ThinkPHP
     *   **19**: Fastjson
     *   **20**: ImageMagick
     *   **21**: PHPWind
     *   **22**: phpMyAdmin
     *   **23**: Resin
     *   **24**: IIS
     *   **99**: Others
     *
     * @example 1
     *
     * @var int
     */
    public $applicationType;

    /**
     * @description The Common Vulnerabilities and Exposures (CVE) ID of the related vulnerability.
     *
     * @example CVE-2021-22945
     *
     * @var string
     */
    public $cveId;

    /**
     * @description The CVE link.
     *
     * @example https://nxx.nxxx.gov/vuln/detail/CVE-2022-XXXX
     *
     * @var string
     */
    public $cveUrl;

    /**
     * @description The description of the WAF rule.
     *
     * @example OK
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the rule was modified.
     *
     * @example 2021-12-29T17:08:45Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the custom WAF rule.
     *
     * @example 100001
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the WAF rule.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description Protection type Valid values:
     *
     *   **11**: SQL injection
     *   **12**: cross-site scripting (XSS)
     *   **13**: code execution
     *   **14**: carriage return line feeds (CRLF)
     *   **15**: local file inclusion
     *   **16**: remote file inclusion
     *   **17**: webshells
     *   **19**: cross-site request forgery
     *   **20**: others
     *   **21**: SEMA
     *
     * @example 11
     *
     * @var int
     */
    public $protectionType;

    /**
     * @description The risk level of the resources that do not comply with the managed rule. Valid values:
     *
     *   **1**: high risk
     *   **2**: medium risk
     *   **3**: low risk
     *
     * @example 2
     *
     * @var int
     */
    public $riskLevel;
    protected $_name = [
        'applicationType' => 'ApplicationType',
        'cveId'           => 'CveId',
        'cveUrl'          => 'CveUrl',
        'description'     => 'Description',
        'gmtModified'     => 'GmtModified',
        'id'              => 'Id',
        'name'            => 'Name',
        'protectionType'  => 'ProtectionType',
        'riskLevel'       => 'RiskLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }
        if (null !== $this->cveId) {
            $res['CveId'] = $this->cveId;
        }
        if (null !== $this->cveUrl) {
            $res['CveUrl'] = $this->cveUrl;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->protectionType) {
            $res['ProtectionType'] = $this->protectionType;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }
        if (isset($map['CveId'])) {
            $model->cveId = $map['CveId'];
        }
        if (isset($map['CveUrl'])) {
            $model->cveUrl = $map['CveUrl'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProtectionType'])) {
            $model->protectionType = $map['ProtectionType'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
