<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessApplicationsForDynamicRouteResponseBody\dynamicRoutes;
use AlibabaCloud\Tea\Model;

class ListPrivateAccessApplicationsForDynamicRouteResponseBody extends Model
{
    /**
     * @var dynamicRoutes[]
     */
    public $dynamicRoutes;

    /**
     * @example BE4FB974-11BC-5453-9BE1-1606A73EACA6
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
     * @return ListPrivateAccessApplicationsForDynamicRouteResponseBody
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
