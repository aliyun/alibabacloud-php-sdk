<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListRoleResponseBody\roleList;
use AlibabaCloud\Tea\Model;

class ListRoleResponseBody extends Model
{
    /**
     * @description The HTTP status code that is returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The additional information that is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 57609587-DFA2-41EC-****-*********
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The roles.
     *
     * @var roleList
     */
    public $roleList;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'roleList'  => 'RoleList',
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
        if (null !== $this->roleList) {
            $res['RoleList'] = null !== $this->roleList ? $this->roleList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRoleResponseBody
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
        if (isset($map['RoleList'])) {
            $model->roleList = roleList::fromMap($map['RoleList']);
        }

        return $model;
    }
}
