<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackMenuResponseBody\list_;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $menuName;

    /**
     * @var bool
     */
    public $support;
    protected $_name = [
        'menuName' => 'MenuName',
        'support' => 'Support',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->menuName) {
            $res['MenuName'] = $this->menuName;
        }

        if (null !== $this->support) {
            $res['Support'] = $this->support;
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
        if (isset($map['MenuName'])) {
            $model->menuName = $map['MenuName'];
        }

        if (isset($map['Support'])) {
            $model->support = $map['Support'];
        }

        return $model;
    }
}
