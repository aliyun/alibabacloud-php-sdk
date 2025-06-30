<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeUserStatusResponseBody;

use AlibabaCloud\Dara\Model;

class userStatus extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var bool
     */
    public $auditClosable;

    /**
     * @var bool
     */
    public $auditReleasable;

    /**
     * @var bool
     */
    public $authed;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $dataManagerRole;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $instanceNum;

    /**
     * @var int
     */
    public $instanceTotalCount;

    /**
     * @var int
     */
    public $labStatus;

    /**
     * @var int
     */
    public $ossTotalSize;

    /**
     * @var int
     */
    public $protectionDays;

    /**
     * @var bool
     */
    public $purchased;

    /**
     * @var int
     */
    public $releaseDays;

    /**
     * @var int
     */
    public $releaseTime;

    /**
     * @var int
     */
    public $remainDays;

    /**
     * @var bool
     */
    public $trail;

    /**
     * @var bool
     */
    public $useAgentAudit;

    /**
     * @var int
     */
    public $useInstanceNum;

    /**
     * @var int
     */
    public $useOssSize;
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'auditClosable' => 'AuditClosable',
        'auditReleasable' => 'AuditReleasable',
        'authed' => 'Authed',
        'chargeType' => 'ChargeType',
        'dataManagerRole' => 'DataManagerRole',
        'instanceId' => 'InstanceId',
        'instanceNum' => 'InstanceNum',
        'instanceTotalCount' => 'InstanceTotalCount',
        'labStatus' => 'LabStatus',
        'ossTotalSize' => 'OssTotalSize',
        'protectionDays' => 'ProtectionDays',
        'purchased' => 'Purchased',
        'releaseDays' => 'ReleaseDays',
        'releaseTime' => 'ReleaseTime',
        'remainDays' => 'RemainDays',
        'trail' => 'Trail',
        'useAgentAudit' => 'UseAgentAudit',
        'useInstanceNum' => 'UseInstanceNum',
        'useOssSize' => 'UseOssSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
