<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210903\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\GetConnectionTicketResponseBody\policy;
use AlibabaCloud\Tea\Model;

class GetConnectionTicketResponseBody extends Model
{
    /**
     * @example aig-53fvrq1oanz6cxzi3
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @example ai-gc1gemx6vpa6vlync
     *
     * @var string
     */
    public $appInstanceId;

    /**
     * @var string
     */
    public $appInstancePersistentId;

    /**
     * @example InternalError.TicketGenInternalError
     *
     * @var string
     */
    public $code;

    /**
     * @example v15418e331d8d068c29411646996786785303b8f61fd880aeaa50c5b584443cd9e65cc7eec72acdaad0a844666a3b26dab
     *
     * @var string
     */
    public $loginToken;

    /**
     * @example reenter app instance failed
     *
     * @var string
     */
    public $message;

    /**
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @var policy
     */
    public $policy;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Id of the request
     *
     * @example AD2D0761-1FE5-549D-B169-D3F8D19C6CDD
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 3
     *
     * @var int
     */
    public $retryTimes;

    /**
     * @example f3d1b31c-605e-4d04-a896-015fc9fc03b4
     *
     * @var string
     */
    public $taskId;

    /**
     * @example Running
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @example n7n9bqZlPrvgUOPSJzfdb$89jWwlVISgrchpY0tOfVYGBBcdoPoH39PVHK63fQTEM14kzajQdWAnHTnSicc35W_eI2LbTSGKquKukwcU7opRwmInhtQH*mlmsZQ3ByOLYVmqI*1hFESs0
     *
     * @var string
     */
    public $ticket;
    protected $_name = [
        'appInstanceGroupId'      => 'AppInstanceGroupId',
        'appInstanceId'           => 'AppInstanceId',
        'appInstancePersistentId' => 'AppInstancePersistentId',
        'code'                    => 'Code',
        'loginToken'              => 'LoginToken',
        'message'                 => 'Message',
        'osType'                  => 'OsType',
        'policy'                  => 'Policy',
        'regionId'                => 'RegionId',
        'requestId'               => 'RequestId',
        'retryTimes'              => 'RetryTimes',
        'taskId'                  => 'TaskId',
        'taskStatus'              => 'TaskStatus',
        'tenantId'                => 'TenantId',
        'ticket'                  => 'Ticket',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->policy) {
            $res['Policy'] = null !== $this->policy ? $this->policy->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return GetConnectionTicketResponseBody
     */
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
