<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Tea\Model;

class ListQueueConsumersRequest extends Model
{
    /**
     * @description The ID of the ApsaraMQ for RabbitMQ instance.
     *
     * @example 188077086902***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The token that marks the end position of the previous returned page. To obtain the next batch of data, call the operation again by using the value of NextToken returned by the previous request. If you call this operation for the first time or want to query all results, set NextToken to an empty string.
     *
     * @example caeba0bbb2be03f84eb48b699f0a****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The number of data entries to return. If you do not configure this parameter, the default value 1 is used.
     *
     * Valid values: 1 to 100.
     * @example 1
     *
     * @var int
     */
    public $queryCount;

    /**
     * @description The name of the queue for which you want to query online consumers.
     *
     * @example queue-rabbit-springboot-advance5
     *
     * @var string
     */
    public $queue;

    /**
     * @description The virtual host (vhost) name.
     *
     * @example test
     *
     * @var string
     */
    public $virtualHost;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'nextToken'   => 'NextToken',
        'queryCount'  => 'QueryCount',
        'queue'       => 'Queue',
        'virtualHost' => 'VirtualHost',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->queryCount) {
            $res['QueryCount'] = $this->queryCount;
        }
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }
        if (null !== $this->virtualHost) {
            $res['VirtualHost'] = $this->virtualHost;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQueueConsumersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['QueryCount'])) {
            $model->queryCount = $map['QueryCount'];
        }
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }
        if (isset($map['VirtualHost'])) {
            $model->virtualHost = $map['VirtualHost'];
        }

        return $model;
    }
}
