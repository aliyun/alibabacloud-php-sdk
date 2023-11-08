<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshProxyStatusResponseBody\proxyStatus;
use AlibabaCloud\Tea\Model;

class DescribeServiceMeshProxyStatusResponseBody extends Model
{
    /**
     * @description The status code. Valid values:
     *
     * `200`: The operation is successful.
     *
     *   `403`: You are not authorized to perform this operation.
     *   `503`: A backend server error occurs.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The returned message.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The information about the status of the proxies on the data plane.
     *
     * @var proxyStatus[]
     */
    public $proxyStatus;

    /**
     * @description The request ID.
     *
     * @example 31d3a0f0-07ed-4f6e-9004-1804498c****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example success
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'code'        => 'Code',
        'message'     => 'Message',
        'proxyStatus' => 'ProxyStatus',
        'requestId'   => 'RequestId',
        'success'     => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->proxyStatus) {
            $res['ProxyStatus'] = [];
            if (null !== $this->proxyStatus && \is_array($this->proxyStatus)) {
                $n = 0;
                foreach ($this->proxyStatus as $item) {
                    $res['ProxyStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceMeshProxyStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ProxyStatus'])) {
            if (!empty($map['ProxyStatus'])) {
                $model->proxyStatus = [];
                $n                  = 0;
                foreach ($map['ProxyStatus'] as $item) {
                    $model->proxyStatus[$n++] = null !== $item ? proxyStatus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
