<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsSuperAccountInstancesResponseBody\dbInstances;

class DescribeRdsSuperAccountInstancesResponseBody extends Model
{
    /**
     * @var dbInstances
     */
    public $dbInstances;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dbInstances' => 'DbInstances',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dbInstances) {
            $this->dbInstances->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbInstances) {
            $res['DbInstances'] = null !== $this->dbInstances ? $this->dbInstances->toArray($noStream) : $this->dbInstances;
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
        if (isset($map['DbInstances'])) {
            $model->dbInstances = dbInstances::fromMap($map['DbInstances']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
