<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicDisposalProcessesResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicDisposalProcessesResponseBody\disposalProcesses\deviceBasicInfo;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicDisposalProcessesResponseBody\disposalProcesses\deviceStatusInfo;
use AlibabaCloud\Tea\Model;

class disposalProcesses extends Model
{
    /**
     * @description User\\"s department.
     *
     * @example IT
     *
     * @var string
     */
    public $department;

    /**
     * @description Device ID.
     *
     * @example FD7554AD-4CDE-6359-6B49-4FE950606C2C
     *
     * @var string
     */
    public $devTag;

    /**
     * @description Basic device information.
     *
     * @var deviceBasicInfo
     */
    public $deviceBasicInfo;

    /**
     * @description 设备状态信息。
     *
     * @var deviceStatusInfo
     */
    public $deviceStatusInfo;

    /**
     * @description List of disposal actions.
     *
     * @var string[]
     */
    public $disposalActions;

    /**
     * @description Disposal process ID.
     *
     * @example dp-xxxxxxxx
     *
     * @var string
     */
    public $disposalProcessId;

    /**
     * @description Disposal time, in seconds since the epoch.
     *
     * @example 1743059249
     *
     * @var string
     */
    public $disposalTime;

    /**
     * @description Dynamic policy ID.
     *
     * @example dynamic-policy-xxxxxxxx
     *
     * @var string
     */
    public $dynamicPolicyId;

    /**
     * @description Dynamic policy name.
     *
     * @example 动态策略1
     *
     * @var string
     */
    public $dynamicPolicyName;

    /**
     * @description Terminal device name. Length: 1~128 characters, supporting Chinese and uppercase/lowercase English letters, and can include numbers, half-width periods (.), commas (,), semicolons (;), hyphens (-), underscores (_), slashes (/), at (@) symbols, and spaces. Entering an underscore (_) alone will additionally query all terminal devices with 4-byte UTF-8 characters in their names.
     *
     * @example WANGCHENCHENNBB
     *
     * @var string
     */
    public $hostname;

    /**
     * @description Recovery type.
     * - **auto**：Automatic recovery.
     * - **console**：Console recovery.
     * - **auth**：Certification and reporting recovery.
     *
     * @example auto
     *
     * @var string
     */
    public $recoveryType;

    /**
     * @description Rule content.
     *
     * @example {
     * "Combinator": "OR",
     * "Rules": [
     * {
     * "Operator": "version_gt",
     * "Values": [
     * "1"
     * ],
     * "RuleType": "device_info",
     * "Id": "1",
     * "RuleSubType": "basic_info",
     * "Name": "app_version"
     * }
     * ]
     * }
     *
     * @var mixed
     */
    public $ruleContent;

    /**
     * @description SASE用户ID。
     *
     * @example asdqwedg-xzczvzdaf-asfafs
     *
     * @var string
     */
    public $saseUserId;

    /**
     * @description Disposal status. Values:
     * - **disposal**: In the disposal state.
     * - **finished**: Already automatically recovered.
     * - **recovery**: Recovered by authentication and reporting or console recovery.
     *
     * @example disposal
     *
     * @var string
     */
    public $status;

    /**
     * @description Username.
     *
     * @example xiaoming
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }
        if (null !== $this->devTag) {
            $res['DevTag'] = $this->devTag;
        }
        if (null !== $this->deviceBasicInfo) {
            $res['DeviceBasicInfo'] = null !== $this->deviceBasicInfo ? $this->deviceBasicInfo->toMap() : null;
        }
        if (null !== $this->deviceStatusInfo) {
            $res['DeviceStatusInfo'] = null !== $this->deviceStatusInfo ? $this->deviceStatusInfo->toMap() : null;
        }
        if (null !== $this->disposalActions) {
            $res['DisposalActions'] = $this->disposalActions;
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

    /**
     * @param array $map
     *
     * @return disposalProcesses
     */
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
                $model->disposalActions = $map['DisposalActions'];
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
