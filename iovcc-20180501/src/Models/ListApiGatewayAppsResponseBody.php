<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListApiGatewayAppsResponseBody\apiGatewayApps;
use AlibabaCloud\Tea\Model;

class ListApiGatewayAppsResponseBody extends Model
{
    /**
     * @var apiGatewayApps[]
     */
    public $apiGatewayApps;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apiGatewayApps' => 'ApiGatewayApps',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiGatewayApps) {
            $res['ApiGatewayApps'] = [];
            if (null !== $this->apiGatewayApps && \is_array($this->apiGatewayApps)) {
                $n = 0;
                foreach ($this->apiGatewayApps as $item) {
                    $res['ApiGatewayApps'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListApiGatewayAppsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiGatewayApps'])) {
            if (!empty($map['ApiGatewayApps'])) {
                $model->apiGatewayApps = [];
                $n                     = 0;
                foreach ($map['ApiGatewayApps'] as $item) {
                    $model->apiGatewayApps[$n++] = null !== $item ? apiGatewayApps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
