<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class GetConnectionTicketResponseBody extends Model
{
    /**
     * @description The ID of the delivery group.
     *
     * @example aig-53fvrq1oan****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @description The ID of the application instance.
     *
     * @example ai-7ybdeiyoeh5e****
     *
     * @var string
     */
    public $appInstanceId;

    /**
     * @description The ID of the persistent session.
     *
     * @example p-0bxls9m3cl7s****
     *
     * @var string
     */
    public $appInstancePersistentId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @description The operating system.
     *
     * Valid value:
     *
     *   Windows: the Windows operating system
     *
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @description The request ID.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The task ID.
     *
     * @example f3d1b31c-605e-4d04-a896****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The task status.
     *
     * Valid values:
     *
     *   Finished: The task is complete.
     *   Failed: The task failed.
     *   Running: The task is being executed.
     *
     * @example Running
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 148871678899****
     *
     * @var int
     */
    public $tenantId;

    /**
     * @description The credential that is used to connect to App Streaming.
     *
     * >  This parameter is displayed for calls other than the first call to this operation.
     * @example DQpbRGVza3RvcF0NCkZvcmNlVGxzVHlwZT0xDQpHV1Rva2VuUGFydDE9MDAva09ROW1FUTU3dU****
     *
     * @var string
     */
    public $ticket;
    protected $_name = [
        'appInstanceGroupId'      => 'AppInstanceGroupId',
        'appInstanceId'           => 'AppInstanceId',
        'appInstancePersistentId' => 'AppInstancePersistentId',
        'bizRegionId'             => 'BizRegionId',
        'osType'                  => 'OsType',
        'requestId'               => 'RequestId',
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
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
