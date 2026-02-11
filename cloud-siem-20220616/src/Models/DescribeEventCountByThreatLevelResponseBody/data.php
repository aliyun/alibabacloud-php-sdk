<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeEventCountByThreatLevelResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeEventCountByThreatLevelResponseBody\data\eventDailyNum;

class data extends Model
{
    /**
     * @var eventDailyNum[]
     */
    public $eventDailyNum;

    /**
     * @var int
     */
    public $eventNum;

    /**
     * @var int
     */
    public $highLevelEventNum;

    /**
     * @var int
     */
    public $infoLevelEventNum;

    /**
     * @var int
     */
    public $lowLevelEventNum;

    /**
     * @var int
     */
    public $mediumLevelEventNum;

    /**
     * @var int
     */
    public $seriousLevelEventNum;

    /**
     * @var int
     */
    public $undealEventNum;
    protected $_name = [
        'eventDailyNum' => 'EventDailyNum',
        'eventNum' => 'EventNum',
        'highLevelEventNum' => 'HighLevelEventNum',
        'infoLevelEventNum' => 'InfoLevelEventNum',
        'lowLevelEventNum' => 'LowLevelEventNum',
        'mediumLevelEventNum' => 'MediumLevelEventNum',
        'seriousLevelEventNum' => 'SeriousLevelEventNum',
        'undealEventNum' => 'UndealEventNum',
    ];

    public function validate()
    {
        if (\is_array($this->eventDailyNum)) {
            Model::validateArray($this->eventDailyNum);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventDailyNum) {
            if (\is_array($this->eventDailyNum)) {
                $res['EventDailyNum'] = [];
                $n1 = 0;
                foreach ($this->eventDailyNum as $item1) {
                    $res['EventDailyNum'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->eventNum) {
            $res['EventNum'] = $this->eventNum;
        }

        if (null !== $this->highLevelEventNum) {
            $res['HighLevelEventNum'] = $this->highLevelEventNum;
        }

        if (null !== $this->infoLevelEventNum) {
            $res['InfoLevelEventNum'] = $this->infoLevelEventNum;
        }

        if (null !== $this->lowLevelEventNum) {
            $res['LowLevelEventNum'] = $this->lowLevelEventNum;
        }

        if (null !== $this->mediumLevelEventNum) {
            $res['MediumLevelEventNum'] = $this->mediumLevelEventNum;
        }

        if (null !== $this->seriousLevelEventNum) {
            $res['SeriousLevelEventNum'] = $this->seriousLevelEventNum;
        }

        if (null !== $this->undealEventNum) {
            $res['UndealEventNum'] = $this->undealEventNum;
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
        if (isset($map['EventDailyNum'])) {
            if (!empty($map['EventDailyNum'])) {
                $model->eventDailyNum = [];
                $n1 = 0;
                foreach ($map['EventDailyNum'] as $item1) {
                    $model->eventDailyNum[$n1] = eventDailyNum::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EventNum'])) {
            $model->eventNum = $map['EventNum'];
        }

        if (isset($map['HighLevelEventNum'])) {
            $model->highLevelEventNum = $map['HighLevelEventNum'];
        }

        if (isset($map['InfoLevelEventNum'])) {
            $model->infoLevelEventNum = $map['InfoLevelEventNum'];
        }

        if (isset($map['LowLevelEventNum'])) {
            $model->lowLevelEventNum = $map['LowLevelEventNum'];
        }

        if (isset($map['MediumLevelEventNum'])) {
            $model->mediumLevelEventNum = $map['MediumLevelEventNum'];
        }

        if (isset($map['SeriousLevelEventNum'])) {
            $model->seriousLevelEventNum = $map['SeriousLevelEventNum'];
        }

        if (isset($map['UndealEventNum'])) {
            $model->undealEventNum = $map['UndealEventNum'];
        }

        return $model;
    }
}
