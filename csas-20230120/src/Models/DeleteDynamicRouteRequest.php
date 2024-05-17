<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class DeleteDynamicRouteRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example dr-ca9fddfac7c6****
     *
     * @var string
     */
    public $dynamicRouteId;
    protected $_name = [
        'dynamicRouteId' => 'DynamicRouteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicRouteId) {
            $res['DynamicRouteId'] = $this->dynamicRouteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDynamicRouteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicRouteId'])) {
            $model->dynamicRouteId = $map['DynamicRouteId'];
        }

        return $model;
    }
}
