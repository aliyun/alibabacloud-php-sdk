<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeAbolishApiTaskRequest extends Model
{
    /**
     * @example fc54****dd4c4***ad7edd7****39401
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
     * @return DescribeAbolishApiTaskRequest
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
