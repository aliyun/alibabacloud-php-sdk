<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGraySixRequest\home;

use AlibabaCloud\Tea\Model;

class t extends Model
{
    /**
     * @var string
     */
    public $class;
    protected $_name = [
        'class' => 'Class',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->class) {
            $res['Class'] = $this->class;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return t
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Class'])) {
            $model->class = $map['Class'];
        }

        return $model;
    }
}
