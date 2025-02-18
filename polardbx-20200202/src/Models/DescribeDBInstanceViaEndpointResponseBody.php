<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceViaEndpointResponseBody\DBInstance;

class DescribeDBInstanceViaEndpointResponseBody extends Model
{
    /**
     * @var DBInstance
     */
    public $DBInstance;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstance' => 'DBInstance',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->DBInstance) {
            $this->DBInstance->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstance) {
            $res['DBInstance'] = null !== $this->DBInstance ? $this->DBInstance->toArray($noStream) : $this->DBInstance;
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
        if (isset($map['DBInstance'])) {
            $model->DBInstance = DBInstance::fromMap($map['DBInstance']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
