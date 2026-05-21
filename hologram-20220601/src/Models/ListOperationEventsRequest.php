<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;

class ListOperationEventsRequest extends Model
{
    /**
     * @var string
     */
    public $eventName;

    /**
     * @var bool
     */
    public $eventNameDesc;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $scheduleTimeDesc;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'eventName' => 'eventName',
        'eventNameDesc' => 'eventNameDesc',
        'eventType' => 'eventType',
        'instanceId' => 'instanceId',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'scheduleTimeDesc' => 'scheduleTimeDesc',
        'state' => 'state',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventName) {
            $res['eventName'] = $this->eventName;
        }

        if (null !== $this->eventNameDesc) {
            $res['eventNameDesc'] = $this->eventNameDesc;
        }

        if (null !== $this->eventType) {
            $res['eventType'] = $this->eventType;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->scheduleTimeDesc) {
            $res['scheduleTimeDesc'] = $this->scheduleTimeDesc;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
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
        if (isset($map['eventName'])) {
            $model->eventName = $map['eventName'];
        }

        if (isset($map['eventNameDesc'])) {
            $model->eventNameDesc = $map['eventNameDesc'];
        }

        if (isset($map['eventType'])) {
            $model->eventType = $map['eventType'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['scheduleTimeDesc'])) {
            $model->scheduleTimeDesc = $map['scheduleTimeDesc'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
