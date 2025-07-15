<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressConnectTrafficQosResponseBody\qosList;

use AlibabaCloud\Tea\Model;

class queueList extends Model
{
    /**
     * @description The percentage of bandwidth allocated to a QoS queue.
     *
     * - If QueueType is set to **Medium**, this parameter is required. Valid values: **1** to **100**.
     * - If QueueType is set to **Default**, a value of - is returned.
     *
     * @example 100
     *
     * @var string
     */
    public $bandwidthPercent;

    /**
     * @description The ID of the QoS policy.
     *
     * @example qos-pksbqfmotl5hzqmhf8
     *
     * @var string
     */
    public $qosId;

    /**
     * @description The description of the QoS queue.
     *
     * The description can be up to **256** characters in length. It cannot start with `http://` or `https://`.
     *
     * @example qos-queue-test
     *
     * @var string
     */
    public $queueDescription;

    /**
     * @description The ID of the QoS queue.
     *
     * @example qos-queue-9nyx2u7n71s2rcy4n5
     *
     * @var string
     */
    public $queueId;

    /**
     * @description The name of the QoS queue.
     *
     * The name can be up to **128** characters in length and cannot start with `http://` or `https://`.
     *
     * @example qos-queue-test
     *
     * @var string
     */
    public $queueName;

    /**
     * @description The type of the QoS queue. Valid values:
     *
     * - **High**: high-priority queue.
     * - **Medium**: standard queue.
     * - **Default**: default queue.
     * > You cannot create a default queue.
     * @example High
     *
     * @var string
     */
    public $queueType;

    /**
     * @description The state of the QoS queue. Valid values:
     *
     * - **Normal**: The QoS queue is available.
     * - **Configuring**: The QoS queue is being configured.
     * - **Deleting**: The QoS queue is being deleted.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'bandwidthPercent' => 'BandwidthPercent',
        'qosId' => 'QosId',
        'queueDescription' => 'QueueDescription',
        'queueId' => 'QueueId',
        'queueName' => 'QueueName',
        'queueType' => 'QueueType',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthPercent) {
            $res['BandwidthPercent'] = $this->bandwidthPercent;
        }
        if (null !== $this->qosId) {
            $res['QosId'] = $this->qosId;
        }
        if (null !== $this->queueDescription) {
            $res['QueueDescription'] = $this->queueDescription;
        }
        if (null !== $this->queueId) {
            $res['QueueId'] = $this->queueId;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->queueType) {
            $res['QueueType'] = $this->queueType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queueList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthPercent'])) {
            $model->bandwidthPercent = $map['BandwidthPercent'];
        }
        if (isset($map['QosId'])) {
            $model->qosId = $map['QosId'];
        }
        if (isset($map['QueueDescription'])) {
            $model->queueDescription = $map['QueueDescription'];
        }
        if (isset($map['QueueId'])) {
            $model->queueId = $map['QueueId'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['QueueType'])) {
            $model->queueType = $map['QueueType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
