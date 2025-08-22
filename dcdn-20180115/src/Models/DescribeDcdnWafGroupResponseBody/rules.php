<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafGroupResponseBody;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
    /**
     * @var int
     */
    public $applicationType;

    /**
     * @var string
     */
    public $cveId;

    /**
     * @var string
     */
    public $cveUrl;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $protectionType;

    /**
     * @var int
     */
    public $riskLevel;
    protected $_name = [
        'applicationType' => 'ApplicationType',
        'cveId' => 'CveId',
        'cveUrl' => 'CveUrl',
        'description' => 'Description',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'name' => 'Name',
        'protectionType' => 'ProtectionType',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
