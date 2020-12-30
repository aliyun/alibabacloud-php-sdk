<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUserTenantsResponseBody\tenantList;
use AlibabaCloud\Tea\Model;

class ListUserTenantsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tenantList[]
     */
    public $tenantList;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId'    => 'RequestId',
        'tenantList'   => 'TenantList',
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'success'      => 'Success',
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
        if (null !== $this->tenantList) {
            $res['TenantList'] = [];
            if (null !== $this->tenantList && \is_array($this->tenantList)) {
                $n = 0;
                foreach ($this->tenantList as $item) {
                    $res['TenantList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
