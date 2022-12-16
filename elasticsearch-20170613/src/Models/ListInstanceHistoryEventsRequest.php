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
     * @example 1645596516000
     *
     * @var string
     */
    public $eventCreateEndTime;

    /**
     * @example 1645596516000
     *
     * @var string
     */
    public $eventCreateStartTime;

    /**
     * @var string[]
     */
    public $eventCycleStatus;

    /**
     * @example 1645596516000
     *
     * @var string
     */
    public $eventExecuteEndTime;

    /**
     * @example 1645596516000
     *
     * @var string
     */
    public $eventExecuteStartTime;

    /**
     * @example 1645596516000
     *
     * @var string
     */
    public $eventFinashEndTime;

    /**
     * @example 1645596516000
     *
     * @var string
     */
    public $eventFinashStartTime;

    /**
     * @var string[]
     */
    public $eventLevel;

    /**
     * @var string[]
     */
    public $eventType;

    /**
     * @example es-cn-2r42l7a740005****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 10.1.xx.xx
     *
     * @var string
     */
    public $nodeIP;

    /**
     * @example 0
     *
     * @var int
     */
    public $page;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'body'                  => 'body',
        'eventCreateEndTime'    => 'eventCreateEndTime',
        'eventCreateStartTime'  => 'eventCreateStartTime',
        'eventCycleStatus'      => 'eventCycleStatus',
        'eventExecuteEndTime'   => 'eventExecuteEndTime',
        'eventExecuteStartTime' => 'eventExecuteStartTime',
        'eventFinashEndTime'    => 'eventFinashEndTime',
        'eventFinashStartTime'  => 'eventFinashStartTime',
        'eventLevel'            => 'eventLevel',
        'eventType'             => 'eventType',
        'instanceId'            => 'instanceId',
        'nodeIP'                => 'nodeIP',
        'page'                  => 'page',
        'size'                  => 'size',
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
        if (null !== $this->eventCycleStatus) {
            $res['eventCycleStatus'] = $this->eventCycleStatus;
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
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
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
        if (isset($map['eventCycleStatus'])) {
            if (!empty($map['eventCycleStatus'])) {
                $model->eventCycleStatus = $map['eventCycleStatus'];
            }
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
            if (!empty($map['eventLevel'])) {
                $model->eventLevel = $map['eventLevel'];
            }
        }
        if (isset($map['eventType'])) {
            if (!empty($map['eventType'])) {
                $model->eventType = $map['eventType'];
            }
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['nodeIP'])) {
            $model->nodeIP = $map['nodeIP'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
