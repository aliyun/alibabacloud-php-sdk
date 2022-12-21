<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListProxiesResponseBody\proxyList;
use AlibabaCloud\Tea\Model;

class ListProxiesResponseBody extends Model
{
    /**
     * @description The error code returned.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned.
     *
     * @example User can not access to Tenant [123445]
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description An array that consists of secure access proxies.
     *
     * @var proxyList[]
     */
    public $proxyList;

    /**
     * @description The ID of the request.
     *
     * @example 5812180E-555F-5F90-BE4F-280576F4****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     * - **true**: The request was successful.
     * - **false**: The request failed.
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'proxyList'    => 'ProxyList',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->proxyList) {
            $res['ProxyList'] = [];
            if (null !== $this->proxyList && \is_array($this->proxyList)) {
                $n = 0;
                foreach ($this->proxyList as $item) {
                    $res['ProxyList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListProxiesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ProxyList'])) {
            if (!empty($map['ProxyList'])) {
                $model->proxyList = [];
                $n                = 0;
                foreach ($map['ProxyList'] as $item) {
                    $model->proxyList[$n++] = null !== $item ? proxyList::fromMap($item) : $item;
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
