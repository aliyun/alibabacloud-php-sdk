<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListInstanceHistoryEventsShrinkRequest extends Model
{
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
    public $eventCycleStatusShrink;

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
    public $eventLevelShrink;

    /**
     * @var string
     */
    public $eventTypeShrink;

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
        'eventCreateEndTime'     => 'eventCreateEndTime',
        'eventCreateStartTime'   => 'eventCreateStartTime',
        'eventCycleStatusShrink' => 'eventCycleStatus',
        'eventExecuteEndTime'    => 'eventExecuteEndTime',
        'eventExecuteStartTime'  => 'eventExecuteStartTime',
        'eventFinashEndTime'     => 'eventFinashEndTime',
        'eventFinashStartTime'   => 'eventFinashStartTime',
        'eventLevelShrink'       => 'eventLevel',
        'eventTypeShrink'        => 'eventType',
        'instanceId'             => 'instanceId',
        'nodeIP'                 => 'nodeIP',
        'page'                   => 'page',
        'size'                   => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventCreateEndTime) {
            $res['eventCreateEndTime'] = $this->eventCreateEndTime;
        }
        if (null !== $this->eventCreateStartTime) {
            $res['eventCreateStartTime'] = $this->eventCreateStartTime;
        }
        if (null !== $this->eventCycleStatusShrink) {
            $res['eventCycleStatus'] = $this->eventCycleStatusShrink;
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
        if (null !== $this->eventLevelShrink) {
            $res['eventLevel'] = $this->eventLevelShrink;
        }
        if (null !== $this->eventTypeShrink) {
            $res['eventType'] = $this->eventTypeShrink;
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
     * @return ListInstanceHistoryEventsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['eventCreateEndTime'])) {
            $model->eventCreateEndTime = $map['eventCreateEndTime'];
        }
        if (isset($map['eventCreateStartTime'])) {
            $model->eventCreateStartTime = $map['eventCreateStartTime'];
        }
        if (isset($map['eventCycleStatus'])) {
            $model->eventCycleStatusShrink = $map['eventCycleStatus'];
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
            $model->eventLevelShrink = $map['eventLevel'];
        }
        if (isset($map['eventType'])) {
            $model->eventTypeShrink = $map['eventType'];
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
