<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\ListAiAppByPageResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\ListAiAppByPageResponseBody\items\riskEvents\labels;

class riskEvents extends Model
{
    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var int
     */
    public $eventCount;

    /**
     * @var string[]
     */
    public $eventDescs;

    /**
     * @var string[]
     */
    public $eventIds;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $eventStatus;

    /**
     * @var labels[]
     */
    public $labels;
    protected $_name = [
        'eventCode' => 'EventCode',
        'eventCount' => 'EventCount',
        'eventDescs' => 'EventDescs',
        'eventIds' => 'EventIds',
        'eventName' => 'EventName',
        'eventStatus' => 'EventStatus',
        'labels' => 'Labels',
    ];

    public function validate()
    {
        if (\is_array($this->eventDescs)) {
            Model::validateArray($this->eventDescs);
        }
        if (\is_array($this->eventIds)) {
            Model::validateArray($this->eventIds);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventCode) {
            $res['EventCode'] = $this->eventCode;
        }

        if (null !== $this->eventCount) {
            $res['EventCount'] = $this->eventCount;
        }

        if (null !== $this->eventDescs) {
            if (\is_array($this->eventDescs)) {
                $res['EventDescs'] = [];
                $n1 = 0;
                foreach ($this->eventDescs as $item1) {
                    $res['EventDescs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->eventIds) {
            if (\is_array($this->eventIds)) {
                $res['EventIds'] = [];
                $n1 = 0;
                foreach ($this->eventIds as $item1) {
                    $res['EventIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->eventStatus) {
            $res['EventStatus'] = $this->eventStatus;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['EventCode'])) {
            $model->eventCode = $map['EventCode'];
        }

        if (isset($map['EventCount'])) {
            $model->eventCount = $map['EventCount'];
        }

        if (isset($map['EventDescs'])) {
            if (!empty($map['EventDescs'])) {
                $model->eventDescs = [];
                $n1 = 0;
                foreach ($map['EventDescs'] as $item1) {
                    $model->eventDescs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EventIds'])) {
            if (!empty($map['EventIds'])) {
                $model->eventIds = [];
                $n1 = 0;
                foreach ($map['EventIds'] as $item1) {
                    $model->eventIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        if (isset($map['EventStatus'])) {
            $model->eventStatus = $map['EventStatus'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = labels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
