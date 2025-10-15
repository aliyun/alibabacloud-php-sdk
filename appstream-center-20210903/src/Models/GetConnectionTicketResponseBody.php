<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210903\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\GetConnectionTicketResponseBody\bindQueueInfo;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\GetConnectionTicketResponseBody\policy;

class GetConnectionTicketResponseBody extends Model
{
    /**
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var string
     */
    public $appInstanceId;

    /**
     * @var string
     */
    public $appInstancePersistentId;

    /**
     * @var string
     */
    public $avatarId;

    /**
     * @var bindQueueInfo
     */
    public $bindQueueInfo;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $loginToken;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $nextPollIntervalMs;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var policy
     */
    public $policy;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $retryTimes;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $ticket;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceId' => 'AppInstanceId',
        'appInstancePersistentId' => 'AppInstancePersistentId',
        'avatarId' => 'AvatarId',
        'bindQueueInfo' => 'BindQueueInfo',
        'code' => 'Code',
        'loginToken' => 'LoginToken',
        'message' => 'Message',
        'nextPollIntervalMs' => 'NextPollIntervalMs',
        'osType' => 'OsType',
        'policy' => 'Policy',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'retryTimes' => 'RetryTimes',
        'taskId' => 'TaskId',
        'taskStatus' => 'TaskStatus',
        'tenantId' => 'TenantId',
        'ticket' => 'Ticket',
    ];

    public function validate()
    {
        if (null !== $this->bindQueueInfo) {
            $this->bindQueueInfo->validate();
        }
        if (null !== $this->policy) {
            $this->policy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }

        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }

        if (null !== $this->appInstancePersistentId) {
            $res['AppInstancePersistentId'] = $this->appInstancePersistentId;
        }

        if (null !== $this->avatarId) {
            $res['AvatarId'] = $this->avatarId;
        }

        if (null !== $this->bindQueueInfo) {
            $res['BindQueueInfo'] = null !== $this->bindQueueInfo ? $this->bindQueueInfo->toArray($noStream) : $this->bindQueueInfo;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->nextPollIntervalMs) {
            $res['NextPollIntervalMs'] = $this->nextPollIntervalMs;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->policy) {
            $res['Policy'] = null !== $this->policy ? $this->policy->toArray($noStream) : $this->policy;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->retryTimes) {
            $res['RetryTimes'] = $this->retryTimes;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->ticket) {
            $res['Ticket'] = $this->ticket;
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
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }

        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }

        if (isset($map['AppInstancePersistentId'])) {
            $model->appInstancePersistentId = $map['AppInstancePersistentId'];
        }

        if (isset($map['AvatarId'])) {
            $model->avatarId = $map['AvatarId'];
        }

        if (isset($map['BindQueueInfo'])) {
            $model->bindQueueInfo = bindQueueInfo::fromMap($map['BindQueueInfo']);
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['NextPollIntervalMs'])) {
            $model->nextPollIntervalMs = $map['NextPollIntervalMs'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['Policy'])) {
            $model->policy = policy::fromMap($map['Policy']);
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RetryTimes'])) {
            $model->retryTimes = $map['RetryTimes'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['Ticket'])) {
            $model->ticket = $map['Ticket'];
        }

        return $model;
    }
}
