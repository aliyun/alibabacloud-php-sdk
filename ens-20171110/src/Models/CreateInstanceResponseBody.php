<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\CreateInstanceResponseBody\instanceIds;
use AlibabaCloud\Tea\Model;

class CreateInstanceResponseBody extends Model
{
    /**
     * @description The return code. A value of 0 indicates that the request is successful.
     *
     * >  If you call this operation by using SDKs, the return value is of the integer type. If you call this operation by using common methods or HTTP requests, the return value is of the string type.
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @description The IDs of instances.
     *
     * @var instanceIds
     */
    public $instanceIds;

    /**
     * @description The request ID.
     *
     * @example 4A431388-2D4B-46F4-A96B-D4E6BD0688C1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'        => 'Code',
        'instanceIds' => 'InstanceIds',
        'requestId'   => 'RequestId',
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
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = null !== $this->instanceIds ? $this->instanceIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = instanceIds::fromMap($map['InstanceIds']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
