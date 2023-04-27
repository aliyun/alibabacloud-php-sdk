<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUserTenantsResponseBody\tenantList;
use AlibabaCloud\Tea\Model;

class ListUserTenantsResponseBody extends Model
{
    /**
     * @example TenantNotExist
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example The specified tenant does not exist.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the request.
     *
     * @example C478D9DA-3615-50F6-A2BC-7855AD65****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The operation that you want to perform. Set the value to **ListUserTenants**.
     *
     * @var tenantList[]
     */
    public $tenantList;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
        'tenantList'   => 'TenantList',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tenantList) {
            $res['TenantList'] = [];
            if (null !== $this->tenantList && \is_array($this->tenantList)) {
                $n = 0;
                foreach ($this->tenantList as $item) {
                    $res['TenantList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserTenantsResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TenantList'])) {
            if (!empty($map['TenantList'])) {
                $model->tenantList = [];
                $n                 = 0;
                foreach ($map['TenantList'] as $item) {
                    $model->tenantList[$n++] = null !== $item ? tenantList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
