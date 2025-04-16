<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicDisposalProcessesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicDisposalProcessesResponseBody\disposalProcesses\deviceBasicInfo;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicDisposalProcessesResponseBody\disposalProcesses\deviceStatusInfo;

class disposalProcesses extends Model
{
    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $devTag;

    /**
     * @var deviceBasicInfo
     */
    public $deviceBasicInfo;

    /**
     * @var deviceStatusInfo
     */
    public $deviceStatusInfo;

    /**
     * @var string[]
     */
    public $disposalActions;

    /**
     * @var string
     */
    public $disposalProcessId;

    /**
     * @var string
     */
    public $disposalTime;

    /**
     * @var string
     */
    public $dynamicPolicyId;

    /**
     * @var string
     */
    public $dynamicPolicyName;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $recoveryType;

    /**
     * @var mixed
     */
    public $ruleContent;

    /**
     * @var string
     */
    public $saseUserId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'department' => 'Department',
        'devTag' => 'DevTag',
        'deviceBasicInfo' => 'DeviceBasicInfo',
        'deviceStatusInfo' => 'DeviceStatusInfo',
        'disposalActions' => 'DisposalActions',
        'disposalProcessId' => 'DisposalProcessId',
        'disposalTime' => 'DisposalTime',
        'dynamicPolicyId' => 'DynamicPolicyId',
        'dynamicPolicyName' => 'DynamicPolicyName',
        'hostname' => 'Hostname',
        'recoveryType' => 'RecoveryType',
        'ruleContent' => 'RuleContent',
        'saseUserId' => 'SaseUserId',
        'status' => 'Status',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        if (null !== $this->deviceBasicInfo) {
            $this->deviceBasicInfo->validate();
        }
        if (null !== $this->deviceStatusInfo) {
            $this->deviceStatusInfo->validate();
        }
        if (\is_array($this->disposalActions)) {
            Model::validateArray($this->disposalActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }

        if (null !== $this->devTag) {
            $res['DevTag'] = $this->devTag;
        }

        if (null !== $this->deviceBasicInfo) {
            $res['DeviceBasicInfo'] = null !== $this->deviceBasicInfo ? $this->deviceBasicInfo->toArray($noStream) : $this->deviceBasicInfo;
        }

        if (null !== $this->deviceStatusInfo) {
            $res['DeviceStatusInfo'] = null !== $this->deviceStatusInfo ? $this->deviceStatusInfo->toArray($noStream) : $this->deviceStatusInfo;
        }

        if (null !== $this->disposalActions) {
            if (\is_array($this->disposalActions)) {
                $res['DisposalActions'] = [];
                $n1 = 0;
                foreach ($this->disposalActions as $item1) {
                    $res['DisposalActions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->disposalProcessId) {
            $res['DisposalProcessId'] = $this->disposalProcessId;
        }

        if (null !== $this->disposalTime) {
            $res['DisposalTime'] = $this->disposalTime;
        }

        if (null !== $this->dynamicPolicyId) {
            $res['DynamicPolicyId'] = $this->dynamicPolicyId;
        }

        if (null !== $this->dynamicPolicyName) {
            $res['DynamicPolicyName'] = $this->dynamicPolicyName;
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->recoveryType) {
            $res['RecoveryType'] = $this->recoveryType;
        }

        if (null !== $this->ruleContent) {
            $res['RuleContent'] = $this->ruleContent;
        }

        if (null !== $this->saseUserId) {
            $res['SaseUserId'] = $this->saseUserId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }

        if (isset($map['DevTag'])) {
            $model->devTag = $map['DevTag'];
        }

        if (isset($map['DeviceBasicInfo'])) {
            $model->deviceBasicInfo = deviceBasicInfo::fromMap($map['DeviceBasicInfo']);
        }

        if (isset($map['DeviceStatusInfo'])) {
            $model->deviceStatusInfo = deviceStatusInfo::fromMap($map['DeviceStatusInfo']);
        }

        if (isset($map['DisposalActions'])) {
            if (!empty($map['DisposalActions'])) {
                $model->disposalActions = [];
                $n1 = 0;
                foreach ($map['DisposalActions'] as $item1) {
                    $model->disposalActions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DisposalProcessId'])) {
            $model->disposalProcessId = $map['DisposalProcessId'];
        }

        if (isset($map['DisposalTime'])) {
            $model->disposalTime = $map['DisposalTime'];
        }

        if (isset($map['DynamicPolicyId'])) {
            $model->dynamicPolicyId = $map['DynamicPolicyId'];
        }

        if (isset($map['DynamicPolicyName'])) {
            $model->dynamicPolicyName = $map['DynamicPolicyName'];
        }

        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['RecoveryType'])) {
            $model->recoveryType = $map['RecoveryType'];
        }

        if (isset($map['RuleContent'])) {
            $model->ruleContent = $map['RuleContent'];
        }

        if (isset($map['SaseUserId'])) {
            $model->saseUserId = $map['SaseUserId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
