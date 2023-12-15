<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeImportOASTaskRequest extends Model
{
    /**
     * @description The ID of the asynchronous API import task that was generated during the import operation. This ID is used to query the execution status of the API import task.
     *
     * @example 4c53ccf1d40c489686d1adf5c2644a7f
     *
     * @var string
     */
    public $operationId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'operationId'   => 'OperationId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImportOASTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
