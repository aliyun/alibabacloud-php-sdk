<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessTagsForDynamicRouteResponseBody\dynamicRoutes;
use AlibabaCloud\Tea\Model;

class ListPrivateAccessTagsForDynamicRouteResponseBody extends Model
{
    /**
     * @var dynamicRoutes[]
     */
    public $dynamicRoutes;

    /**
     * @example B608C6AE-623D-55C4-9454-601B88AE937E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dynamicRoutes' => 'DynamicRoutes',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicRoutes) {
            $res['DynamicRoutes'] = [];
            if (null !== $this->dynamicRoutes && \is_array($this->dynamicRoutes)) {
                $n = 0;
                foreach ($this->dynamicRoutes as $item) {
                    $res['DynamicRoutes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPrivateAccessTagsForDynamicRouteResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicRoutes'])) {
            if (!empty($map['DynamicRoutes'])) {
                $model->dynamicRoutes = [];
                $n                    = 0;
                foreach ($map['DynamicRoutes'] as $item) {
                    $model->dynamicRoutes[$n++] = null !== $item ? dynamicRoutes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
