<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceHistoryEventsRequest\body;
use AlibabaCloud\Tea\Model;

class ListInstanceHistoryEventsRequest extends Model
{
    /**
     * @var body[]
     */
    public $body;

    /**
     * @var string
     */
    public $eventCreateEndTime;

    /**
     * @var string
     */
    public $eventCreateStartTime;

    /**
     * @var string
     */
    public $eventExecuteEndTime;

    /**
     * @var string
     */
    public $eventExecuteStartTime;

    /**
     * @var string
     */
    public $eventFinashEndTime;

    /**
     * @var string
     */
    public $eventFinashStartTime;

    /**
     * @var string
     */
    public $eventLevel;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $nodeIP;
    protected $_name = [
        'body'                  => 'body',
        'eventCreateEndTime'    => 'eventCreateEndTime',
        'eventCreateStartTime'  => 'eventCreateStartTime',
        'eventExecuteEndTime'   => 'eventExecuteEndTime',
        'eventExecuteStartTime' => 'eventExecuteStartTime',
        'eventFinashEndTime'    => 'eventFinashEndTime',
        'eventFinashStartTime'  => 'eventFinashStartTime',
        'eventLevel'            => 'eventLevel',
        'eventType'             => 'eventType',
        'instanceId'            => 'instanceId',
        'nodeIP'                => 'nodeIP',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = [];
            if (null !== $this->body && \is_array($this->body)) {
                $n = 0;
                foreach ($this->body as $item) {
                    $res['body'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->eventCreateEndTime) {
            $res['eventCreateEndTime'] = $this->eventCreateEndTime;
        }
        if (null !== $this->eventCreateStartTime) {
            $res['eventCreateStartTime'] = $this->eventCreateStartTime;
        }
        if (null !== $this->eventExecuteEndTime) {
            $res['eventExecuteEndTime'] = $this->eventExecuteEndTime;
        }
        if (null !== $this->eventExecuteStartTime) {
            $res['eventExecuteStartTime'] = $this->eventExecuteStartTime;
        }
        if (null !== $this->eventFinashEndTime) {
            $res['eventFinashEndTime'] = $this->eventFinashEndTime;
        }
        if (null !== $this->eventFinashStartTime) {
            $res['eventFinashStartTime'] = $this->eventFinashStartTime;
        }
        if (null !== $this->eventLevel) {
            $res['eventLevel'] = $this->eventLevel;
        }
        if (null !== $this->eventType) {
            $res['eventType'] = $this->eventType;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeIP) {
            $res['nodeIP'] = $this->nodeIP;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceHistoryEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            if (!empty($map['body'])) {
                $model->body = [];
                $n           = 0;
                foreach ($map['body'] as $item) {
                    $model->body[$n++] = null !== $item ? body::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['eventCreateEndTime'])) {
            $model->eventCreateEndTime = $map['eventCreateEndTime'];
        }
        if (isset($map['eventCreateStartTime'])) {
            $model->eventCreateStartTime = $map['eventCreateStartTime'];
        }
        if (isset($map['eventExecuteEndTime'])) {
            $model->eventExecuteEndTime = $map['eventExecuteEndTime'];
        }
        if (isset($map['eventExecuteStartTime'])) {
            $model->eventExecuteStartTime = $map['eventExecuteStartTime'];
        }
        if (isset($map['eventFinashEndTime'])) {
            $model->eventFinashEndTime = $map['eventFinashEndTime'];
        }
        if (isset($map['eventFinashStartTime'])) {
            $model->eventFinashStartTime = $map['eventFinashStartTime'];
        }
        if (isset($map['eventLevel'])) {
            $model->eventLevel = $map['eventLevel'];
        }
        if (isset($map['eventType'])) {
            $model->eventType = $map['eventType'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['nodeIP'])) {
            $model->nodeIP = $map['nodeIP'];
        }

        return $model;
    }
}
