<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeCategoryTemplateRuleListResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $identificationRuleIds;

    /**
     * @var string
     */
    public $identificationScope;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $riskLevelId;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'description' => 'Description',
        'id' => 'Id',
        'identificationRuleIds' => 'IdentificationRuleIds',
        'identificationScope' => 'IdentificationScope',
        'name' => 'Name',
        'riskLevelId' => 'RiskLevelId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->identificationRuleIds) {
            $res['IdentificationRuleIds'] = $this->identificationRuleIds;
        }

        if (null !== $this->identificationScope) {
            $res['IdentificationScope'] = $this->identificationScope;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IdentificationRuleIds'])) {
            $model->identificationRuleIds = $map['IdentificationRuleIds'];
        }

        if (isset($map['IdentificationScope'])) {
            $model->identificationScope = $map['IdentificationScope'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
