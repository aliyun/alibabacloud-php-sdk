<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceAttributeResponseBody\DBInstance;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var DBInstance
     */
    public $DBInstance;
    protected $_name = [
        'requestId'  => 'RequestId',
        'DBInstance' => 'DBInstance',
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
        if (null !== $this->DBInstance) {
            $res['DBInstance'] = null !== $this->DBInstance ? $this->DBInstance->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBInstance'])) {
            $model->DBInstance = DBInstance::fromMap($map['DBInstance']);
        }

        return $model;
    }
}
