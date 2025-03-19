<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetDashboardRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description Route name
     *
     * @example test-route
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
     * @return filter
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
