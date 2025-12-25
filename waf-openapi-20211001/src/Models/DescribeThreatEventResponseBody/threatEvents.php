<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeThreatEventResponseBody;

use AlibabaCloud\Dara\Model;

class threatEvents extends Model
{
    /**
     * @var string
     */
    public $blockRate;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventLevel;

    /**
     * @var string
     */
    public $eventSrc;

    /**
     * @var string
     */
    public $eventTag;

    /**
     * @var string
     */
    public $eventTarget;
    protected $_name = [
        'blockRate' => 'BlockRate',
        'endTime' => 'EndTime',
        'eventId' => 'EventId',
        'eventLevel' => 'EventLevel',
        'eventSrc' => 'EventSrc',
        'eventTag' => 'EventTag',
        'eventTarget' => 'EventTarget',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockRate) {
            $res['BlockRate'] = $this->blockRate;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->eventLevel) {
            $res['EventLevel'] = $this->eventLevel;
        }

        if (null !== $this->eventSrc) {
            $res['EventSrc'] = $this->eventSrc;
        }

        if (null !== $this->eventTag) {
            $res['EventTag'] = $this->eventTag;
        }

        if (null !== $this->eventTarget) {
            $res['EventTarget'] = $this->eventTarget;
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
        if (isset($map['BlockRate'])) {
            $model->blockRate = $map['BlockRate'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['EventLevel'])) {
            $model->eventLevel = $map['EventLevel'];
        }

        if (isset($map['EventSrc'])) {
            $model->eventSrc = $map['EventSrc'];
        }

        if (isset($map['EventTag'])) {
            $model->eventTag = $map['EventTag'];
        }

        if (isset($map['EventTarget'])) {
            $model->eventTarget = $map['EventTarget'];
        }

        return $model;
    }
}
