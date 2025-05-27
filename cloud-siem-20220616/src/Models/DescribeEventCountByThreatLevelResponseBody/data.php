<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeEventCountByThreatLevelResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
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
    public $lowLevelEventNum;

    /**
     * @var int
     */
    public $mediumLevelEventNum;

    /**
     * @var int
     */
    public $undealEventNum;
    protected $_name = [
        'eventNum' => 'EventNum',
        'highLevelEventNum' => 'HighLevelEventNum',
        'lowLevelEventNum' => 'LowLevelEventNum',
        'mediumLevelEventNum' => 'MediumLevelEventNum',
        'undealEventNum' => 'UndealEventNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventNum) {
            $res['EventNum'] = $this->eventNum;
        }

        if (null !== $this->highLevelEventNum) {
            $res['HighLevelEventNum'] = $this->highLevelEventNum;
        }

        if (null !== $this->lowLevelEventNum) {
            $res['LowLevelEventNum'] = $this->lowLevelEventNum;
        }

        if (null !== $this->mediumLevelEventNum) {
            $res['MediumLevelEventNum'] = $this->mediumLevelEventNum;
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
        if (isset($map['EventNum'])) {
            $model->eventNum = $map['EventNum'];
        }

        if (isset($map['HighLevelEventNum'])) {
            $model->highLevelEventNum = $map['HighLevelEventNum'];
        }

        if (isset($map['LowLevelEventNum'])) {
            $model->lowLevelEventNum = $map['LowLevelEventNum'];
        }

        if (isset($map['MediumLevelEventNum'])) {
            $model->mediumLevelEventNum = $map['MediumLevelEventNum'];
        }

        if (isset($map['UndealEventNum'])) {
            $model->undealEventNum = $map['UndealEventNum'];
        }

        return $model;
    }
}
