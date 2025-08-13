<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHitRuleTrendResponseBody\resultObject\series;

use AlibabaCloud\Dara\Model;

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
        'num' => 'num',
        'scale' => 'scale',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
