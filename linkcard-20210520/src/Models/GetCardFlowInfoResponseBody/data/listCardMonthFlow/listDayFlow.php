<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardFlowInfoResponseBody\data\listCardMonthFlow;

use AlibabaCloud\Tea\Model;

class listDayFlow extends Model
{
    /**
     * @var string
     */
    public $day;

    /**
     * @var string
     */
    public $flow;
    protected $_name = [
        'day'  => 'Day',
        'flow' => 'Flow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->day) {
            $res['Day'] = $this->day;
        }
        if (null !== $this->flow) {
            $res['Flow'] = $this->flow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listDayFlow
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Day'])) {
            $model->day = $map['Day'];
        }
        if (isset($map['Flow'])) {
            $model->flow = $map['Flow'];
        }

        return $model;
    }
}
