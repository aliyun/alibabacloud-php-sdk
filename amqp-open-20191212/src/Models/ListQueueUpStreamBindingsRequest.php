<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Tea\Model;

class ListQueueUpStreamBindingsRequest extends Model
{
    /**
     * @description The ID of the ApsaraMQ for RabbitMQ instance.
     *
     * This parameter is required.
     *
     * @example 1880770869023***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The maximum number of entries to return.
     *
     * @example 1
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that marks the end position of the previous returned page. To obtain the next batch of data, call the operation again by using the value of NextToken returned by the previous request. If you call this operation for the first time or want to query all results, set NextToken to an empty string.
     *
     * @example caeba0bbb2be03f84eb48b699f0a****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The queue name.
     *
     * This parameter is required.
     *
     * @example QueueTest
     *
     * @var string
     */
    public $queueName;

    /**
     * @description The virtual host (vhost) name.
     *
     * This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $virtualHost;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'queueName' => 'QueueName',
        'virtualHost' => 'VirtualHost',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->virtualHost) {
            $res['VirtualHost'] = $this->virtualHost;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQueueUpStreamBindingsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['VirtualHost'])) {
            $model->virtualHost = $map['VirtualHost'];
        }

        return $model;
    }
}
