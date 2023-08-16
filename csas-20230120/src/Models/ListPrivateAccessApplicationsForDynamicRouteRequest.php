<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListPrivateAccessApplicationsForDynamicRouteRequest extends Model
{
    /**
     * @var string[]
     */
    public $dynamicRouteIds;
    protected $_name = [
        'dynamicRouteIds' => 'DynamicRouteIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicRouteIds) {
            $res['DynamicRouteIds'] = $this->dynamicRouteIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPrivateAccessApplicationsForDynamicRouteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicRouteIds'])) {
            if (!empty($map['DynamicRouteIds'])) {
                $model->dynamicRouteIds = $map['DynamicRouteIds'];
            }
        }

        return $model;
    }
}
