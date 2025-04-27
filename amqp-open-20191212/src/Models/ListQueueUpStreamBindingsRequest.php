<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Dara\Model;

class ListQueueUpStreamBindingsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $queueName;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
