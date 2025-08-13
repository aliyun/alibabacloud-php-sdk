<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleBarChartResponseBody\resultObject\series;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $eventName;

    /**
     * @var int
     */
    public $num;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'eventName' => 'eventName',
        'num' => 'num',
        'ruleName' => 'ruleName',
        'status' => 'status',
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

        if (null !== $this->num) {
            $res['num'] = $this->num;
        }

        if (null !== $this->ruleName) {
            $res['ruleName'] = $this->ruleName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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

        if (isset($map['num'])) {
            $model->num = $map['num'];
        }

        if (isset($map['ruleName'])) {
            $model->ruleName = $map['ruleName'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
