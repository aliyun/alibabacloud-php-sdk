<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListClusterCheckResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListClusterCheckResultResponseBody\checks\checkPolicies;

class checks extends Model
{
    /**
     * @var int
     */
    public $assetSubType;

    /**
     * @var int
     */
    public $assetType;

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
    public $checkType;

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
     * @var bool
     */
    public $trialPermission;

    /**
     * @var int
     */
    public $trialPermissionType;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'assetSubType' => 'AssetSubType',
        'assetType' => 'AssetType',
        'checkId' => 'CheckId',
        'checkPolicies' => 'CheckPolicies',
        'checkShowName' => 'CheckShowName',
        'checkType' => 'CheckType',
        'instanceSubType' => 'InstanceSubType',
        'instanceType' => 'InstanceType',
        'lastCheckTime' => 'LastCheckTime',
        'riskLevel' => 'RiskLevel',
        'status' => 'Status',
        'trialPermission' => 'TrialPermission',
        'trialPermissionType' => 'TrialPermissionType',
        'vendor' => 'Vendor',
    ];

    public function validate()
    {
        if (\is_array($this->checkPolicies)) {
            Model::validateArray($this->checkPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetSubType) {
            $res['AssetSubType'] = $this->assetSubType;
        }

        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
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

        if (null !== $this->checkShowName) {
            $res['CheckShowName'] = $this->checkShowName;
        }

        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
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

        if (null !== $this->trialPermission) {
            $res['TrialPermission'] = $this->trialPermission;
        }

        if (null !== $this->trialPermissionType) {
            $res['TrialPermissionType'] = $this->trialPermissionType;
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
        if (isset($map['AssetSubType'])) {
            $model->assetSubType = $map['AssetSubType'];
        }

        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
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

        if (isset($map['CheckShowName'])) {
            $model->checkShowName = $map['CheckShowName'];
        }

        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
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

        if (isset($map['TrialPermission'])) {
            $model->trialPermission = $map['TrialPermission'];
        }

        if (isset($map['TrialPermissionType'])) {
            $model->trialPermissionType = $map['TrialPermissionType'];
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
