<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class DashboardFilter extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $routeName;
    protected $_name = [
        'routeName' => 'routeName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeName) {
            $res['routeName'] = $this->routeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DashboardFilter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['routeName'])) {
            $model->routeName = $map['routeName'];
        }

        return $model;
    }
}
