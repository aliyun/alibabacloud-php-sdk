<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceViaEndpointResponseBody\DBInstance;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceViaEndpointResponseBody extends Model
{
    /**
     * @var DBInstance
     */
    public $DBInstance;

    /**
     * @example 14036EBE-CF2E-44DB-ACE9-AC6157D3A6FC
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
     * @return DescribeDBInstanceViaEndpointResponseBody
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
