<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceAttributeResponseBody\DBInstance;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceAttributeResponseBody extends Model
{
    /**
     * @var DBInstance
     */
    public $DBInstance;

    /**
     * @example 9B2F3840-5C98-475C-B269-2D5C3A31797C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstance' => 'DBInstance',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstance) {
            $res['DBInstance'] = null !== $this->DBInstance ? $this->DBInstance->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstance'])) {
            $model->DBInstance = DBInstance::fromMap($map['DBInstance']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
