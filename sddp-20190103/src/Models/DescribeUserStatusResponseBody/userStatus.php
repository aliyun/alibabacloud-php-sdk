<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeUserStatusResponseBody;

use AlibabaCloud\Tea\Model;

class userStatus extends Model
{
    /**
     * @description The AccessKey ID of the current account.
     *
     * @example LTAI4G67HRBzNRmMhfyv****
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description Indicates whether the SQL Explorer feature can be disabled. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $auditClosable;

    /**
     * @description Indicates whether the audit resources can be released.
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $auditReleasable;

    /**
     * @description Indicates whether DSC has permission to access user resources within the current account. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $authed;

    /**
     * @description The billing method of DCS that is purchased by using the current account. Valid values:
     *
     *   **PREPAY**: subscription
     *   **POSTPAY**: pay-as-you-go
     *
     * @example PREPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The permissions that the current account has. Valid values:
     *
     *   **0**: The current account has the administrative permissions or read-only permissions on Data Security Center.
     *   **1**: The current account has the permissions to manage data domains.
     *
     * @example 1
     *
     * @var int
     */
    public $dataManagerRole;

    /**
     * @description The ID of the data security center instance purchased by the main account.
     *
     * @example sddp-cn-****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of instances within the current account.
     *
     * @example 32
     *
     * @var int
     */
    public $instanceNum;

    /**
     * @description The total number of instances.
     *
     * @example 10
     *
     * @var int
     */
    public $instanceTotalCount;

    /**
     * @description Indicates whether the data security lab feature is enabled. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $labStatus;

    /**
     * @description OSS total storage capacity. Unit: Bytes.
     *
     * @example 2048
     *
     * @var int
     */
    public $ossTotalSize;

    /**
     * @description Accumulate the number of days to protect user assets.
     *
     * @example 2
     *
     * @var int
     */
    public $protectionDays;

    /**
     * @description Indicates whether DSC is purchased. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $purchased;

    /**
     * @description The grace period between when DSC is expired and when DSC is released. Unit: days.
     *
     * @example 15
     *
     * @var int
     */
    public $releaseDays;

    /**
     * @description The time when the audit resources are released. Unit: milliseconds.
     *
     * @example 15000
     *
     * @var int
     */
    public $releaseTime;

    /**
     * @description The remaining period for which the data assets within the current account can be protected by DSC.
     *
     * @example 131
     *
     * @var int
     */
    public $remainDays;

    /**
     * @description Indicates whether the current account uses a free trial of DSC. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $trail;

    /**
     * @description Indicates whether the agent audit feature is used. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var bool
     */
    public $useAgentAudit;

    /**
     * @description The number of instances that are used.
     *
     * @example 125
     *
     * @var int
     */
    public $useInstanceNum;

    /**
     * @description The occupied space of the Object Storage Service (OSS) bucket. Unit: bytes.
     *
     * @example 234
     *
     * @var int
     */
    public $useOssSize;
    protected $_name = [
        'accessKeyId'        => 'AccessKeyId',
        'auditClosable'      => 'AuditClosable',
        'auditReleasable'    => 'AuditReleasable',
        'authed'             => 'Authed',
        'chargeType'         => 'ChargeType',
        'dataManagerRole'    => 'DataManagerRole',
        'instanceId'         => 'InstanceId',
        'instanceNum'        => 'InstanceNum',
        'instanceTotalCount' => 'InstanceTotalCount',
        'labStatus'          => 'LabStatus',
        'ossTotalSize'       => 'OssTotalSize',
        'protectionDays'     => 'ProtectionDays',
        'purchased'          => 'Purchased',
        'releaseDays'        => 'ReleaseDays',
        'releaseTime'        => 'ReleaseTime',
        'remainDays'         => 'RemainDays',
        'trail'              => 'Trail',
        'useAgentAudit'      => 'UseAgentAudit',
        'useInstanceNum'     => 'UseInstanceNum',
        'useOssSize'         => 'UseOssSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->auditClosable) {
            $res['AuditClosable'] = $this->auditClosable;
        }
        if (null !== $this->auditReleasable) {
            $res['AuditReleasable'] = $this->auditReleasable;
        }
        if (null !== $this->authed) {
            $res['Authed'] = $this->authed;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->dataManagerRole) {
            $res['DataManagerRole'] = $this->dataManagerRole;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceNum) {
            $res['InstanceNum'] = $this->instanceNum;
        }
        if (null !== $this->instanceTotalCount) {
            $res['InstanceTotalCount'] = $this->instanceTotalCount;
        }
        if (null !== $this->labStatus) {
            $res['LabStatus'] = $this->labStatus;
        }
        if (null !== $this->ossTotalSize) {
            $res['OssTotalSize'] = $this->ossTotalSize;
        }
        if (null !== $this->protectionDays) {
            $res['ProtectionDays'] = $this->protectionDays;
        }
        if (null !== $this->purchased) {
            $res['Purchased'] = $this->purchased;
        }
        if (null !== $this->releaseDays) {
            $res['ReleaseDays'] = $this->releaseDays;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->remainDays) {
            $res['RemainDays'] = $this->remainDays;
        }
        if (null !== $this->trail) {
            $res['Trail'] = $this->trail;
        }
        if (null !== $this->useAgentAudit) {
            $res['UseAgentAudit'] = $this->useAgentAudit;
        }
        if (null !== $this->useInstanceNum) {
            $res['UseInstanceNum'] = $this->useInstanceNum;
        }
        if (null !== $this->useOssSize) {
            $res['UseOssSize'] = $this->useOssSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['AuditClosable'])) {
            $model->auditClosable = $map['AuditClosable'];
        }
        if (isset($map['AuditReleasable'])) {
            $model->auditReleasable = $map['AuditReleasable'];
        }
        if (isset($map['Authed'])) {
            $model->authed = $map['Authed'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['DataManagerRole'])) {
            $model->dataManagerRole = $map['DataManagerRole'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceNum'])) {
            $model->instanceNum = $map['InstanceNum'];
        }
        if (isset($map['InstanceTotalCount'])) {
            $model->instanceTotalCount = $map['InstanceTotalCount'];
        }
        if (isset($map['LabStatus'])) {
            $model->labStatus = $map['LabStatus'];
        }
        if (isset($map['OssTotalSize'])) {
            $model->ossTotalSize = $map['OssTotalSize'];
        }
        if (isset($map['ProtectionDays'])) {
            $model->protectionDays = $map['ProtectionDays'];
        }
        if (isset($map['Purchased'])) {
            $model->purchased = $map['Purchased'];
        }
        if (isset($map['ReleaseDays'])) {
            $model->releaseDays = $map['ReleaseDays'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['RemainDays'])) {
            $model->remainDays = $map['RemainDays'];
        }
        if (isset($map['Trail'])) {
            $model->trail = $map['Trail'];
        }
        if (isset($map['UseAgentAudit'])) {
            $model->useAgentAudit = $map['UseAgentAudit'];
        }
        if (isset($map['UseInstanceNum'])) {
            $model->useInstanceNum = $map['UseInstanceNum'];
        }
        if (isset($map['UseOssSize'])) {
            $model->useOssSize = $map['UseOssSize'];
        }

        return $model;
    }
}
