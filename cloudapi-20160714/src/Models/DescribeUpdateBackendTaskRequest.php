<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeUpdateBackendTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 4e13c3e0c44c4a4ebb5231264eeb9bc1
     *
     * @var string
     */
    public $operationUid;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'operationUid'  => 'OperationUid',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationUid) {
            $res['OperationUid'] = $this->operationUid;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUpdateBackendTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationUid'])) {
            $model->operationUid = $map['OperationUid'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
