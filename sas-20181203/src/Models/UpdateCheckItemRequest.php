<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateCheckItemRequest\assistInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateCheckItemRequest\description;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateCheckItemRequest\solution;

class UpdateCheckItemRequest extends Model
{
    /**
     * @var assistInfo
     */
    public $assistInfo;

    /**
     * @var int
     */
    public $checkId;

    /**
     * @var string
     */
    public $checkRule;

    /**
     * @var string
     */
    public $checkShowName;

    /**
     * @var description
     */
    public $description;

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
     * @var solution
     */
    public $solution;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'assistInfo' => 'AssistInfo',
        'checkId' => 'CheckId',
        'checkRule' => 'CheckRule',
        'checkShowName' => 'CheckShowName',
        'description' => 'Description',
        'instanceSubType' => 'InstanceSubType',
        'instanceType' => 'InstanceType',
        'remark' => 'Remark',
        'riskLevel' => 'RiskLevel',
        'sectionIds' => 'SectionIds',
        'solution' => 'Solution',
        'status' => 'Status',
        'vendor' => 'Vendor',
    ];

    public function validate()
    {
        if (null !== $this->assistInfo) {
            $this->assistInfo->validate();
        }
        if (null !== $this->description) {
            $this->description->validate();
        }
        if (\is_array($this->sectionIds)) {
            Model::validateArray($this->sectionIds);
        }
        if (null !== $this->solution) {
            $this->solution->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assistInfo) {
            $res['AssistInfo'] = null !== $this->assistInfo ? $this->assistInfo->toArray($noStream) : $this->assistInfo;
        }

        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->checkRule) {
            $res['CheckRule'] = $this->checkRule;
        }

        if (null !== $this->checkShowName) {
            $res['CheckShowName'] = $this->checkShowName;
        }

        if (null !== $this->description) {
            $res['Description'] = null !== $this->description ? $this->description->toArray($noStream) : $this->description;
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

        if (null !== $this->solution) {
            $res['Solution'] = null !== $this->solution ? $this->solution->toArray($noStream) : $this->solution;
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
            $model->assistInfo = assistInfo::fromMap($map['AssistInfo']);
        }

        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['CheckRule'])) {
            $model->checkRule = $map['CheckRule'];
        }

        if (isset($map['CheckShowName'])) {
            $model->checkShowName = $map['CheckShowName'];
        }

        if (isset($map['Description'])) {
            $model->description = description::fromMap($map['Description']);
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
            $model->solution = solution::fromMap($map['Solution']);
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
