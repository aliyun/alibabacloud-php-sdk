<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListProxyAccessesResponseBody\proxyAccessList;
use AlibabaCloud\Tea\Model;

class ListProxyAccessesResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var proxyAccessList[]
     */
    public $proxyAccessList;
    protected $_name = [
        'requestId'       => 'RequestId',
        'success'         => 'Success',
        'errorMessage'    => 'ErrorMessage',
        'errorCode'       => 'ErrorCode',
        'proxyAccessList' => 'ProxyAccessList',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->proxyAccessList) {
            $res['ProxyAccessList'] = [];
            if (null !== $this->proxyAccessList && \is_array($this->proxyAccessList)) {
                $n = 0;
                foreach ($this->proxyAccessList as $item) {
                    $res['ProxyAccessList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProxyAccessesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ProxyAccessList'])) {
            if (!empty($map['ProxyAccessList'])) {
                $model->proxyAccessList = [];
                $n                      = 0;
                foreach ($map['ProxyAccessList'] as $item) {
                    $model->proxyAccessList[$n++] = null !== $item ? proxyAccessList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
