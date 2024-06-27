<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTagsBarChartResponseBody\resultObject\series;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $num;

    /**
     * @var string
     */
    public $scale;
    protected $_name = [
        'num'   => 'num',
        'scale' => 'scale',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->num) {
            $res['num'] = $this->num;
        }
        if (null !== $this->scale) {
            $res['scale'] = $this->scale;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['num'])) {
            $model->num = $map['num'];
        }
        if (isset($map['scale'])) {
            $model->scale = $map['scale'];
        }

        return $model;
    }
}
