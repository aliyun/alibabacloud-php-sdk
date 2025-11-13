<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemsResponseBody\checkItems\assistInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemsResponseBody\checkItems\checkPolicies;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemsResponseBody\checkItems\description;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemsResponseBody\checkItems\solution;

class checkItems extends Model
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
     * @var checkPolicies[]
     */
    public $checkPolicies;

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
    public $checkType;

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
        'checkPolicies' => 'CheckPolicies',
        'checkRule' => 'CheckRule',
        'checkShowName' => 'CheckShowName',
        'checkType' => 'CheckType',
        'description' => 'Description',
        'instanceSubType' => 'InstanceSubType',
        'instanceType' => 'InstanceType',
        'remark' => 'Remark',
        'riskLevel' => 'RiskLevel',
        'solution' => 'Solution',
        'status' => 'Status',
        'vendor' => 'Vendor',
    ];

    public function validate()
    {
        if (null !== $this->assistInfo) {
            $this->assistInfo->validate();
        }
        if (\is_array($this->checkPolicies)) {
            Model::validateArray($this->checkPolicies);
        }
        if (null !== $this->description) {
            $this->description->validate();
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

        if (null !== $this->checkPolicies) {
            if (\is_array($this->checkPolicies)) {
                $res['CheckPolicies'] = [];
                $n1 = 0;
                foreach ($this->checkPolicies as $item1) {
                    $res['CheckPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->checkRule) {
            $res['CheckRule'] = $this->checkRule;
        }

        if (null !== $this->checkShowName) {
            $res['CheckShowName'] = $this->checkShowName;
        }

        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
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

        if (isset($map['CheckPolicies'])) {
            if (!empty($map['CheckPolicies'])) {
                $model->checkPolicies = [];
                $n1 = 0;
                foreach ($map['CheckPolicies'] as $item1) {
                    $model->checkPolicies[$n1] = checkPolicies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CheckRule'])) {
            $model->checkRule = $map['CheckRule'];
        }

        if (isset($map['CheckShowName'])) {
            $model->checkShowName = $map['CheckShowName'];
        }

        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
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
