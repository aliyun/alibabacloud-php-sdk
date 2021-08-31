<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20210616\Models;

use AlibabaCloud\SDK\Linkedmall\V20210616\Models\QueryPermissionsResponseBody\permissionItemList;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\QueryPermissionsResponseBody\permissionList;
use AlibabaCloud\Tea\Model;

class QueryPermissionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var permissionList[]
     */
    public $permissionList;

    /**
     * @var permissionItemList[]
     */
    public $permissionItemList;
    protected $_name = [
        'code'               => 'Code',
        'message'            => 'Message',
        'requestId'          => 'RequestId',
        'permissionList'     => 'PermissionList',
        'permissionItemList' => 'PermissionItemList',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->permissionList) {
            $res['PermissionList'] = [];
            if (null !== $this->permissionList && \is_array($this->permissionList)) {
                $n = 0;
                foreach ($this->permissionList as $item) {
                    $res['PermissionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->permissionItemList) {
            $res['PermissionItemList'] = [];
            if (null !== $this->permissionItemList && \is_array($this->permissionItemList)) {
                $n = 0;
                foreach ($this->permissionItemList as $item) {
                    $res['PermissionItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPermissionsResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PermissionList'])) {
            if (!empty($map['PermissionList'])) {
                $model->permissionList = [];
                $n                     = 0;
                foreach ($map['PermissionList'] as $item) {
                    $model->permissionList[$n++] = null !== $item ? permissionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PermissionItemList'])) {
            if (!empty($map['PermissionItemList'])) {
                $model->permissionItemList = [];
                $n                         = 0;
                foreach ($map['PermissionItemList'] as $item) {
                    $model->permissionItemList[$n++] = null !== $item ? permissionItemList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
