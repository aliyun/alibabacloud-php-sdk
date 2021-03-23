<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListApiGatewayAppsResponseBody\apiGatewayApps;
use AlibabaCloud\Tea\Model;

class ListApiGatewayAppsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var apiGatewayApps[]
     */
    public $apiGatewayApps;
    protected $_name = [
        'requestId'      => 'RequestId',
        'apiGatewayApps' => 'ApiGatewayApps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->apiGatewayApps) {
            $res['ApiGatewayApps'] = [];
            if (null !== $this->apiGatewayApps && \is_array($this->apiGatewayApps)) {
                $n = 0;
                foreach ($this->apiGatewayApps as $item) {
                    $res['ApiGatewayApps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApiGatewayAppsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ApiGatewayApps'])) {
            if (!empty($map['ApiGatewayApps'])) {
                $model->apiGatewayApps = [];
                $n                     = 0;
                foreach ($map['ApiGatewayApps'] as $item) {
                    $model->apiGatewayApps[$n++] = null !== $item ? apiGatewayApps::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
