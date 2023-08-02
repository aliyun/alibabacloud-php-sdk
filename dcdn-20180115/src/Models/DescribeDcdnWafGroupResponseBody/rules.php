<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafGroupResponseBody;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $applicationType;

    /**
     * @description CVE ID。
     *
     * @example CVE-2021-22945
     *
     * @var string
     */
    public $cveId;

    /**
     * @example https://nxx.nxxx.gov/vuln/detail/CVE-2022-XXXX
     *
     * @var string
     */
    public $cveUrl;

    /**
     * @example OK
     *
     * @var string
     */
    public $description;

    /**
     * @example 2021-12-29T17:08:45Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 100001
     *
     * @var int
     */
    public $id;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example 11
     *
     * @var int
     */
    public $protectionType;

    /**
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
