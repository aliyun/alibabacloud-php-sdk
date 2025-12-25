<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeThreatEventDetailResponseBody;

use AlibabaCloud\Dara\Model;

class threatEventDetail extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $eventBlock;

    /**
     * @var string
     */
    public $eventCnt;

    /**
     * @var string
     */
    public $eventCondition;

    /**
     * @var string
     */
    public $eventIntelligence;

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
    public $eventSrcCountry;

    /**
     * @var string
     */
    public $eventSrcRegion;

    /**
     * @var string
     */
    public $eventSuggest;

    /**
     * @var string
     */
    public $eventTag;

    /**
     * @var int
     */
    public $isPersistent;
    protected $_name = [
        'endTime' => 'EndTime',
        'eventBlock' => 'EventBlock',
        'eventCnt' => 'EventCnt',
        'eventCondition' => 'EventCondition',
        'eventIntelligence' => 'EventIntelligence',
        'eventLevel' => 'EventLevel',
        'eventSrc' => 'EventSrc',
        'eventSrcCountry' => 'EventSrcCountry',
        'eventSrcRegion' => 'EventSrcRegion',
        'eventSuggest' => 'EventSuggest',
        'eventTag' => 'EventTag',
        'isPersistent' => 'IsPersistent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->eventBlock) {
            $res['EventBlock'] = $this->eventBlock;
        }

        if (null !== $this->eventCnt) {
            $res['EventCnt'] = $this->eventCnt;
        }

        if (null !== $this->eventCondition) {
            $res['EventCondition'] = $this->eventCondition;
        }

        if (null !== $this->eventIntelligence) {
            $res['EventIntelligence'] = $this->eventIntelligence;
        }

        if (null !== $this->eventLevel) {
            $res['EventLevel'] = $this->eventLevel;
        }

        if (null !== $this->eventSrc) {
            $res['EventSrc'] = $this->eventSrc;
        }

        if (null !== $this->eventSrcCountry) {
            $res['EventSrcCountry'] = $this->eventSrcCountry;
        }

        if (null !== $this->eventSrcRegion) {
            $res['EventSrcRegion'] = $this->eventSrcRegion;
        }

        if (null !== $this->eventSuggest) {
            $res['EventSuggest'] = $this->eventSuggest;
        }

        if (null !== $this->eventTag) {
            $res['EventTag'] = $this->eventTag;
        }

        if (null !== $this->isPersistent) {
            $res['IsPersistent'] = $this->isPersistent;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EventBlock'])) {
            $model->eventBlock = $map['EventBlock'];
        }

        if (isset($map['EventCnt'])) {
            $model->eventCnt = $map['EventCnt'];
        }

        if (isset($map['EventCondition'])) {
            $model->eventCondition = $map['EventCondition'];
        }

        if (isset($map['EventIntelligence'])) {
            $model->eventIntelligence = $map['EventIntelligence'];
        }

        if (isset($map['EventLevel'])) {
            $model->eventLevel = $map['EventLevel'];
        }

        if (isset($map['EventSrc'])) {
            $model->eventSrc = $map['EventSrc'];
        }

        if (isset($map['EventSrcCountry'])) {
            $model->eventSrcCountry = $map['EventSrcCountry'];
        }

        if (isset($map['EventSrcRegion'])) {
            $model->eventSrcRegion = $map['EventSrcRegion'];
        }

        if (isset($map['EventSuggest'])) {
            $model->eventSuggest = $map['EventSuggest'];
        }

        if (isset($map['EventTag'])) {
            $model->eventTag = $map['EventTag'];
        }

        if (isset($map['IsPersistent'])) {
            $model->isPersistent = $map['IsPersistent'];
        }

        return $model;
    }
}
