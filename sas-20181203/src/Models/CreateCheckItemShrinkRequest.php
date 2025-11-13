<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CreateCheckItemShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $assistInfoShrink;

    /**
     * @var string
     */
    public $checkRule;

    /**
     * @var string
     */
    public $checkShowName;

    /**
     * @var string
     */
    public $descriptionShrink;

    /**
     * @var string
     */
    public $instanceSubType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var int[]
     */
    public $sectionIds;

    /**
     * @var string
     */
    public $solutionShrink;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'assistInfoShrink' => 'AssistInfo',
        'checkRule' => 'CheckRule',
        'checkShowName' => 'CheckShowName',
        'descriptionShrink' => 'Description',
        'instanceSubType' => 'InstanceSubType',
        'instanceType' => 'InstanceType',
        'remark' => 'Remark',
        'riskLevel' => 'RiskLevel',
        'sectionIds' => 'SectionIds',
        'solutionShrink' => 'Solution',
        'status' => 'Status',
        'vendor' => 'Vendor',
    ];

    public function validate()
    {
        if (\is_array($this->sectionIds)) {
            Model::validateArray($this->sectionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assistInfoShrink) {
            $res['AssistInfo'] = $this->assistInfoShrink;
        }

        if (null !== $this->checkRule) {
            $res['CheckRule'] = $this->checkRule;
        }

        if (null !== $this->checkShowName) {
            $res['CheckShowName'] = $this->checkShowName;
        }

        if (null !== $this->descriptionShrink) {
            $res['Description'] = $this->descriptionShrink;
        }

        if (null !== $this->instanceSubType) {
            $res['InstanceSubType'] = $this->instanceSubType;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->sectionIds) {
            if (\is_array($this->sectionIds)) {
                $res['SectionIds'] = [];
                $n1 = 0;
                foreach ($this->sectionIds as $item1) {
                    $res['SectionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->solutionShrink) {
            $res['Solution'] = $this->solutionShrink;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
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
        if (isset($map['AssistInfo'])) {
            $model->assistInfoShrink = $map['AssistInfo'];
        }

        if (isset($map['CheckRule'])) {
            $model->checkRule = $map['CheckRule'];
        }

        if (isset($map['CheckShowName'])) {
            $model->checkShowName = $map['CheckShowName'];
        }

        if (isset($map['Description'])) {
            $model->descriptionShrink = $map['Description'];
        }

        if (isset($map['InstanceSubType'])) {
            $model->instanceSubType = $map['InstanceSubType'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['SectionIds'])) {
            if (!empty($map['SectionIds'])) {
                $model->sectionIds = [];
                $n1 = 0;
                foreach ($map['SectionIds'] as $item1) {
                    $model->sectionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Solution'])) {
            $model->solutionShrink = $map['Solution'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
