<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHighRiskPieChartResponseBody\resultObject\highRiskMobileCity;

use AlibabaCloud\Dara\Model;

class grid extends Model
{
    /**
     * @var bool
     */
    public $show;
    protected $_name = [
        'show' => 'show',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->show) {
            $res['show'] = $this->show;
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
        if (isset($map['show'])) {
            $model->show = $map['show'];
        }

        return $model;
    }
}
