<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceHistoryEventsRequest\body;

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
     * @var string[]
     */
    public $eventCycleStatus;

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
     * @var string[]
     */
    public $eventLevel;

    /**
     * @var string[]
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

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'body' => 'body',
        'eventCreateEndTime' => 'eventCreateEndTime',
        'eventCreateStartTime' => 'eventCreateStartTime',
        'eventCycleStatus' => 'eventCycleStatus',
        'eventExecuteEndTime' => 'eventExecuteEndTime',
        'eventExecuteStartTime' => 'eventExecuteStartTime',
        'eventFinashEndTime' => 'eventFinashEndTime',
        'eventFinashStartTime' => 'eventFinashStartTime',
        'eventLevel' => 'eventLevel',
        'eventType' => 'eventType',
        'instanceId' => 'instanceId',
        'nodeIP' => 'nodeIP',
        'page' => 'page',
        'size' => 'size',
    ];

    public function validate()
    {
        if (\is_array($this->body)) {
            Model::validateArray($this->body);
        }
        if (\is_array($this->eventCycleStatus)) {
            Model::validateArray($this->eventCycleStatus);
        }
        if (\is_array($this->eventLevel)) {
            Model::validateArray($this->eventLevel);
        }
        if (\is_array($this->eventType)) {
            Model::validateArray($this->eventType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            if (\is_array($this->body)) {
                $res['body'] = [];
                $n1 = 0;
                foreach ($this->body as $item1) {
                    $res['body'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->eventCycleStatus)) {
                $res['eventCycleStatus'] = [];
                $n1 = 0;
                foreach ($this->eventCycleStatus as $item1) {
                    $res['eventCycleStatus'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->eventLevel)) {
                $res['eventLevel'] = [];
                $n1 = 0;
                foreach ($this->eventLevel as $item1) {
                    $res['eventLevel'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->eventType) {
            if (\is_array($this->eventType)) {
                $res['eventType'] = [];
                $n1 = 0;
                foreach ($this->eventType as $item1) {
                    $res['eventType'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            if (!empty($map['body'])) {
                $model->body = [];
                $n1 = 0;
                foreach ($map['body'] as $item1) {
                    $model->body[$n1] = body::fromMap($item1);
                    ++$n1;
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
                $model->eventCycleStatus = [];
                $n1 = 0;
                foreach ($map['eventCycleStatus'] as $item1) {
                    $model->eventCycleStatus[$n1] = $item1;
                    ++$n1;
                }
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
                $model->eventLevel = [];
                $n1 = 0;
                foreach ($map['eventLevel'] as $item1) {
                    $model->eventLevel[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['eventType'])) {
            if (!empty($map['eventType'])) {
                $model->eventType = [];
                $n1 = 0;
                foreach ($map['eventType'] as $item1) {
                    $model->eventType[$n1] = $item1;
                    ++$n1;
                }
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
