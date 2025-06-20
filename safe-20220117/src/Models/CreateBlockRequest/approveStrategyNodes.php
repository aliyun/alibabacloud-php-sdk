<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\CreateBlockRequest;

use AlibabaCloud\Dara\Model;

class approveStrategyNodes extends Model
{
    /**
     * @var int
     */
    public $approveRuleType;

    /**
     * @var int
     */
    public $approveType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nodeCode;

    /**
     * @var int
     */
    public $priorityOrder;

    /**
     * @var int
     */
    public $roleCode;

    /**
     * @var string[]
     */
    public $roleValue;

    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'approveRuleType' => 'ApproveRuleType',
        'approveType' => 'ApproveType',
        'id' => 'Id',
        'name' => 'Name',
        'nodeCode' => 'NodeCode',
        'priorityOrder' => 'PriorityOrder',
        'roleCode' => 'RoleCode',
        'roleValue' => 'RoleValue',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        if (\is_array($this->roleValue)) {
            Model::validateArray($this->roleValue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approveRuleType) {
            $res['ApproveRuleType'] = $this->approveRuleType;
        }

        if (null !== $this->approveType) {
            $res['ApproveType'] = $this->approveType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nodeCode) {
            $res['NodeCode'] = $this->nodeCode;
        }

        if (null !== $this->priorityOrder) {
            $res['PriorityOrder'] = $this->priorityOrder;
        }

        if (null !== $this->roleCode) {
            $res['RoleCode'] = $this->roleCode;
        }

        if (null !== $this->roleValue) {
            if (\is_array($this->roleValue)) {
                $res['RoleValue'] = [];
                $n1 = 0;
                foreach ($this->roleValue as $item1) {
                    $res['RoleValue'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['ApproveRuleType'])) {
            $model->approveRuleType = $map['ApproveRuleType'];
        }

        if (isset($map['ApproveType'])) {
            $model->approveType = $map['ApproveType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NodeCode'])) {
            $model->nodeCode = $map['NodeCode'];
        }

        if (isset($map['PriorityOrder'])) {
            $model->priorityOrder = $map['PriorityOrder'];
        }

        if (isset($map['RoleCode'])) {
            $model->roleCode = $map['RoleCode'];
        }

        if (isset($map['RoleValue'])) {
            if (!empty($map['RoleValue'])) {
                $model->roleValue = [];
                $n1 = 0;
                foreach ($map['RoleValue'] as $item1) {
                    $model->roleValue[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
