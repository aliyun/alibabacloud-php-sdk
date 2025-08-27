<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances;

class DescribeDBInstanceAttributeResponseBody extends Model
{
    /**
     * @var DBInstances
     */
    public $DBInstances;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstances' => 'DBInstances',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->DBInstances) {
            $this->DBInstances->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstances) {
            $res['DBInstances'] = null !== $this->DBInstances ? $this->DBInstances->toArray($noStream) : $this->DBInstances;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
