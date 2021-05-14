<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackMenuResponseBody\list_;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var bool
     */
    public $support;

    /**
     * @var string
     */
    public $menuName;
    protected $_name = [
        'support'  => 'Support',
        'menuName' => 'MenuName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->support) {
            $res['Support'] = $this->support;
        }
        if (null !== $this->menuName) {
            $res['MenuName'] = $this->menuName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Support'])) {
            $model->support = $map['Support'];
        }
        if (isset($map['MenuName'])) {
            $model->menuName = $map['MenuName'];
        }

        return $model;
    }
}
