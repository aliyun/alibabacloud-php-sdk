<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceSupportMaxPerformanceResponseBody\performances;

class DescribeDBInstanceSupportMaxPerformanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var performances
     */
    public $performances;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'performances' => 'Performances',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->performances) {
            $this->performances->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->performances) {
            $res['Performances'] = null !== $this->performances ? $this->performances->toArray($noStream) : $this->performances;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['Performances'])) {
            $model->performances = performances::fromMap($map['Performances']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
