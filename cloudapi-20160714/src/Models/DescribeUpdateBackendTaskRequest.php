<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeUpdateBackendTaskRequest extends Model
{
    /**
     * @var string
     */
    public $operationUid;
    protected $_name = [
        'operationUid' => 'OperationUid',
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

        return $model;
    }
}
