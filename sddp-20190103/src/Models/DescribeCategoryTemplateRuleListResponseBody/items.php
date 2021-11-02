<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeCategoryTemplateRuleListResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $customType;

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

    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'customType'            => 'CustomType',
        'description'           => 'Description',
        'id'                    => 'Id',
        'identificationRuleIds' => 'IdentificationRuleIds',
        'identificationScope'   => 'IdentificationScope',
        'name'                  => 'Name',
        'riskLevelId'           => 'RiskLevelId',
        'status'                => 'Status',
        'templateId'            => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customType) {
            $res['CustomType'] = $this->customType;
        }
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
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomType'])) {
            $model->customType = $map['CustomType'];
        }
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
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
