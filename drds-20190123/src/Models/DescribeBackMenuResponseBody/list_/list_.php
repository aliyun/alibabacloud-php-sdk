<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackMenuResponseBody\list_;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The backup method. Valid values:
     *
     *   **Logic **: logical backup
     *   **phy**: physical backup
     *
     * @example phy
     *
     * @var string
     */
    public $menuName;

    /**
     * @description Indicates whether backup recovery is supported.
     *
     * @example true
     *
     * @var bool
     */
    public $support;
    protected $_name = [
        'menuName' => 'MenuName',
        'support'  => 'Support',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return list_
     */
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
