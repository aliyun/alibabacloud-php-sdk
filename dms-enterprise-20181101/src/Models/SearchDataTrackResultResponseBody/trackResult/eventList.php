<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDataTrackResultResponseBody\trackResult;

use AlibabaCloud\Dara\Model;

class eventList extends Model
{
    /**
     * @var string[]
     */
    public $dataAfter;

    /**
     * @var string[]
     */
    public $dataBefore;

    /**
     * @var int
     */
    public $eventId;

    /**
     * @var int
     */
    public $eventLength;

    /**
     * @var string
     */
    public $eventTimestamp;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $rollSQL;
    protected $_name = [
        'dataAfter' => 'DataAfter',
        'dataBefore' => 'DataBefore',
        'eventId' => 'EventId',
        'eventLength' => 'EventLength',
        'eventTimestamp' => 'EventTimestamp',
        'eventType' => 'EventType',
        'rollSQL' => 'RollSQL',
    ];

    public function validate()
    {
        if (\is_array($this->dataAfter)) {
            Model::validateArray($this->dataAfter);
        }
        if (\is_array($this->dataBefore)) {
            Model::validateArray($this->dataBefore);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataAfter) {
            if (\is_array($this->dataAfter)) {
                $res['DataAfter'] = [];
                $n1 = 0;
                foreach ($this->dataAfter as $item1) {
                    $res['DataAfter'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->dataBefore) {
            if (\is_array($this->dataBefore)) {
                $res['DataBefore'] = [];
                $n1 = 0;
                foreach ($this->dataBefore as $item1) {
                    $res['DataBefore'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->eventLength) {
            $res['EventLength'] = $this->eventLength;
        }

        if (null !== $this->eventTimestamp) {
            $res['EventTimestamp'] = $this->eventTimestamp;
        }

        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }

        if (null !== $this->rollSQL) {
            $res['RollSQL'] = $this->rollSQL;
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
        if (isset($map['DataAfter'])) {
            if (!empty($map['DataAfter'])) {
                $model->dataAfter = [];
                $n1 = 0;
                foreach ($map['DataAfter'] as $item1) {
                    $model->dataAfter[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DataBefore'])) {
            if (!empty($map['DataBefore'])) {
                $model->dataBefore = [];
                $n1 = 0;
                foreach ($map['DataBefore'] as $item1) {
                    $model->dataBefore[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['EventLength'])) {
            $model->eventLength = $map['EventLength'];
        }

        if (isset($map['EventTimestamp'])) {
            $model->eventTimestamp = $map['EventTimestamp'];
        }

        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }

        if (isset($map['RollSQL'])) {
            $model->rollSQL = $map['RollSQL'];
        }

        return $model;
    }
}
