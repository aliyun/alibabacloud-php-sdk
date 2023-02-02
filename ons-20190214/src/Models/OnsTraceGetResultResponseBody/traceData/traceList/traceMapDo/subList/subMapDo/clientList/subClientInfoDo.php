<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList\traceMapDo\subList\subMapDo\clientList;

use AlibabaCloud\Tea\Model;

class subClientInfoDo extends Model
{
    /**
     * @description The address of the consumer.
     *
     * @example 30.5.**.**
     *
     * @var string
     */
    public $clientHost;

    /**
     * @description The period of time that the system took to consume the message. Unit: milliseconds.
     *
     * @example 43
     *
     * @var int
     */
    public $costTime;

    /**
     * @description The number of attempts that the Message Queue for Apache RocketMQ broker tried to send the message to the consumer.
     *
     * @example 1
     *
     * @var int
     */
    public $reconsumeTimes;

    /**
     * @description Indicates whether the message is consumed. Valid values:
     *
     *   **CONSUME_FAILED**: The message failed to be consumed.
     *   **CONSUME_SUCCESS**: The message is consumed.
     *   **CONSUME_NOT_RETURN:** No responses are returned.
     *   **SEND_UNKNOWN:** The message is a transactional message and is not committed.
     *   **SEND_DELAY:** The message is a scheduled or delayed message and is waiting to be consumed at the specified point in time.
     *
     * @example CONSUME_SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the group that contains the consumer.
     *
     * @example GID_test
     *
     * @var string
     */
    public $subGroupName;

    /**
     * @description The earliest point in time when the message was consumed.
     *
     * @example 1570851590511
     *
     * @var int
     */
    public $subTime;
    protected $_name = [
        'clientHost'     => 'ClientHost',
        'costTime'       => 'CostTime',
        'reconsumeTimes' => 'ReconsumeTimes',
        'status'         => 'Status',
        'subGroupName'   => 'SubGroupName',
        'subTime'        => 'SubTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientHost) {
            $res['ClientHost'] = $this->clientHost;
        }
        if (null !== $this->costTime) {
            $res['CostTime'] = $this->costTime;
        }
        if (null !== $this->reconsumeTimes) {
            $res['ReconsumeTimes'] = $this->reconsumeTimes;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subGroupName) {
            $res['SubGroupName'] = $this->subGroupName;
        }
        if (null !== $this->subTime) {
            $res['SubTime'] = $this->subTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subClientInfoDo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientHost'])) {
            $model->clientHost = $map['ClientHost'];
        }
        if (isset($map['CostTime'])) {
            $model->costTime = $map['CostTime'];
        }
        if (isset($map['ReconsumeTimes'])) {
            $model->reconsumeTimes = $map['ReconsumeTimes'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubGroupName'])) {
            $model->subGroupName = $map['SubGroupName'];
        }
        if (isset($map['SubTime'])) {
            $model->subTime = $map['SubTime'];
        }

        return $model;
    }
}
