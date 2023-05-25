<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListProxyAccessesResponseBody\proxyAccessList;
use AlibabaCloud\Tea\Model;

class ListProxyAccessesResponseBody extends Model
{
    /**
     * @description The error code returned.
     *
     * @example MissingProxyId
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned.
     *
     * @example ProxyId is mandatory for this action.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The information about the users that are authorized to access the database instance by using the secure access proxy feature.
     *
     * @var proxyAccessList[]
     */
    public $proxyAccessList;

    /**
     * @description The ID of the request.
     *
     * @example E53D178A-85E9-5E1F-88B6-3CB1FCF2****
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
        'errorCode'       => 'ErrorCode',
        'errorMessage'    => 'ErrorMessage',
        'proxyAccessList' => 'ProxyAccessList',
        'requestId'       => 'RequestId',
        'success'         => 'Success',
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
        if (null !== $this->proxyAccessList) {
            $res['ProxyAccessList'] = [];
            if (null !== $this->proxyAccessList && \is_array($this->proxyAccessList)) {
                $n = 0;
                foreach ($this->proxyAccessList as $item) {
                    $res['ProxyAccessList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListProxyAccessesResponseBody
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
        if (isset($map['ProxyAccessList'])) {
            if (!empty($map['ProxyAccessList'])) {
                $model->proxyAccessList = [];
                $n                      = 0;
                foreach ($map['ProxyAccessList'] as $item) {
                    $model->proxyAccessList[$n++] = null !== $item ? proxyAccessList::fromMap($item) : $item;
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
