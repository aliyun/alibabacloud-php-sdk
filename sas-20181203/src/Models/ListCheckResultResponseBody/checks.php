<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckResultResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckResultResponseBody\checks\checkPolicies;
use AlibabaCloud\Tea\Model;

class checks extends Model
{
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
    public $checkShowName;

    /**
     * @var string
     */
    public $instanceSubType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $lastCheckTime;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $vendor;

    /**
     * @var string
     */
    public $vendorShowName;
    protected $_name = [
        'checkId'         => 'CheckId',
        'checkPolicies'   => 'CheckPolicies',
        'checkShowName'   => 'CheckShowName',
        'instanceSubType' => 'InstanceSubType',
        'instanceType'    => 'InstanceType',
        'lastCheckTime'   => 'LastCheckTime',
        'riskLevel'       => 'RiskLevel',
        'status'          => 'Status',
        'taskId'          => 'TaskId',
        'vendor'          => 'Vendor',
        'vendorShowName'  => 'VendorShowName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->checkPolicies) {
            $res['CheckPolicies'] = [];
            if (null !== $this->checkPolicies && \is_array($this->checkPolicies)) {
                $n = 0;
                foreach ($this->checkPolicies as $item) {
                    $res['CheckPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->checkShowName) {
            $res['CheckShowName'] = $this->checkShowName;
        }
        if (null !== $this->instanceSubType) {
            $res['InstanceSubType'] = $this->instanceSubType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->lastCheckTime) {
            $res['LastCheckTime'] = $this->lastCheckTime;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }
        if (null !== $this->vendorShowName) {
            $res['VendorShowName'] = $this->vendorShowName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['CheckPolicies'])) {
            if (!empty($map['CheckPolicies'])) {
                $model->checkPolicies = [];
                $n                    = 0;
                foreach ($map['CheckPolicies'] as $item) {
                    $model->checkPolicies[$n++] = null !== $item ? checkPolicies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CheckShowName'])) {
            $model->checkShowName = $map['CheckShowName'];
        }
        if (isset($map['InstanceSubType'])) {
            $model->instanceSubType = $map['InstanceSubType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['LastCheckTime'])) {
            $model->lastCheckTime = $map['LastCheckTime'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }
        if (isset($map['VendorShowName'])) {
            $model->vendorShowName = $map['VendorShowName'];
        }

        return $model;
    }
}
