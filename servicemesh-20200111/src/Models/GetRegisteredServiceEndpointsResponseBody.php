<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceEndpointsResponseBody\serviceEndpoints;
use AlibabaCloud\Tea\Model;

class GetRegisteredServiceEndpointsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serviceEndpoints[]
     */
    public $serviceEndpoints;
    protected $_name = [
        'requestId'        => 'RequestId',
        'serviceEndpoints' => 'ServiceEndpoints',
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
        if (null !== $this->serviceEndpoints) {
            $res['ServiceEndpoints'] = [];
            if (null !== $this->serviceEndpoints && \is_array($this->serviceEndpoints)) {
                $n = 0;
                foreach ($this->serviceEndpoints as $item) {
                    $res['ServiceEndpoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRegisteredServiceEndpointsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceEndpoints'])) {
            if (!empty($map['ServiceEndpoints'])) {
                $model->serviceEndpoints = [];
                $n                       = 0;
                foreach ($map['ServiceEndpoints'] as $item) {
                    $model->serviceEndpoints[$n++] = null !== $item ? serviceEndpoints::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
