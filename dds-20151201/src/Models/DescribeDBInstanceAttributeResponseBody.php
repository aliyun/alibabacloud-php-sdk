<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceAttributeResponseBody extends Model
{
    /**
     * @description Details about instances.
     *
     * @var DBInstances
     */
    public $DBInstances;

    /**
     * @description The ID of the request.
     *
     * @example A935A8EE-A6CC-53DE-98BA-20ABAA7E632B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstances' => 'DBInstances',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstances) {
            $res['DBInstances'] = null !== $this->DBInstances ? $this->DBInstances->toMap() : null;
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
        if (isset($map['DBInstances'])) {
            $model->DBInstances = DBInstances::fromMap($map['DBInstances']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
