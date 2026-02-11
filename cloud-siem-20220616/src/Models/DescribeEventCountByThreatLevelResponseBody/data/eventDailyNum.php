<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeEventCountByThreatLevelResponseBody\data;

use AlibabaCloud\Dara\Model;

class eventDailyNum extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var int
     */
    public $eventNum;

    /**
     * @var int
     */
    public $undealEventNum;
    protected $_name = [
        'date' => 'Date',
        'eventNum' => 'EventNum',
        'undealEventNum' => 'UndealEventNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        if (null !== $this->eventNum) {
            $res['EventNum'] = $this->eventNum;
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
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        if (isset($map['EventNum'])) {
            $model->eventNum = $map['EventNum'];
        }

        if (isset($map['UndealEventNum'])) {
            $model->undealEventNum = $map['UndealEventNum'];
        }

        return $model;
    }
}
