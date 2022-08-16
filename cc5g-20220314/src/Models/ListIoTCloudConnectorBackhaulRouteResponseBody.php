<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\SDK\CC5G\V20220314\Models\ListIoTCloudConnectorBackhaulRouteResponseBody\routes;
use AlibabaCloud\Tea\Model;

class ListIoTCloudConnectorBackhaulRouteResponseBody extends Model
{
    /**
     * @var string
     */
    public $netLinkId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var routes[]
     */
    public $routes;
    protected $_name = [
        'netLinkId' => 'NetLinkId',
        'requestId' => 'RequestId',
        'routes'    => 'Routes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->netLinkId) {
            $res['NetLinkId'] = $this->netLinkId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->routes) {
            $res['Routes'] = [];
            if (null !== $this->routes && \is_array($this->routes)) {
                $n = 0;
                foreach ($this->routes as $item) {
                    $res['Routes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIoTCloudConnectorBackhaulRouteResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetLinkId'])) {
            $model->netLinkId = $map['NetLinkId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Routes'])) {
            if (!empty($map['Routes'])) {
                $model->routes = [];
                $n             = 0;
                foreach ($map['Routes'] as $item) {
                    $model->routes[$n++] = null !== $item ? routes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
