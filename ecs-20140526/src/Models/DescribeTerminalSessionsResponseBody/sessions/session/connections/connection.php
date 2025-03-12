<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTerminalSessionsResponseBody\sessions\session\connections;

use AlibabaCloud\Tea\Model;

class connection extends Model
{
    /**
     * @description The reason why the connection was closed. This parameter is returned only when the `Status` value is `Disconnected`, `Terminated`, or `Failed`. Valid values:
     *
     *   InstanceNotExists: The specified instance did not exist or was released.
     *   InstanceNotRunning: The specified instance was not running.
     *   DeliveryTimeout: The connection timed out.
     *   AgentNeedUpgrade: Cloud Assistant Agent required an upgrade.
     *   AgentNotOnline: Cloud Assistant Agent was not connected to the Cloud Assistant server.
     *   MessageFormatInvalid: The message format was invalid.
     *   AgentSocketClosed: The connection was closed as expected.
     *   ClientClosed: Session Manager Client closed the connection.
     *
     * @example AgentNeedUpgrade
     *
     * @var string
     */
    public $closedReason;

    /**
     * @description The time when the connection was closed.
     *
     * @example 2024-01-19T09:16:46Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The instance ID.
     *
     * @example i-bp1i7gg30r52z2em****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The time when the connection started to be established.
     *
     * @example 2024-01-19T09:16:40Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The state of the session. Valid values:
     *
     *   Connecting: The connection is being established.
     *   Connected: The connection is established.
     *   Disconnected: The connection is disconnected.
     *   Terminating: The session is being terminated.
     *   Terminated: The session is terminated.
     *   Failed: The connection failed.
     *
     * @example Connecting
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'closedReason' => 'ClosedReason',
        'endTime'      => 'EndTime',
        'instanceId'   => 'InstanceId',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->closedReason) {
            $res['ClosedReason'] = $this->closedReason;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClosedReason'])) {
            $model->closedReason = $map['ClosedReason'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
