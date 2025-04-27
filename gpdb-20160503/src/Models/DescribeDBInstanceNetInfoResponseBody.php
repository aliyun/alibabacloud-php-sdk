<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos;

class DescribeDBInstanceNetInfoResponseBody extends Model
{
    /**
     * @var DBInstanceNetInfos
     */
    public $DBInstanceNetInfos;

    /**
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceNetInfos' => 'DBInstanceNetInfos',
        'instanceNetworkType' => 'InstanceNetworkType',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->DBInstanceNetInfos) {
            $this->DBInstanceNetInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceNetInfos) {
            $res['DBInstanceNetInfos'] = null !== $this->DBInstanceNetInfos ? $this->DBInstanceNetInfos->toArray($noStream) : $this->DBInstanceNetInfos;
        }

        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
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
        if (isset($map['DBInstanceNetInfos'])) {
            $model->DBInstanceNetInfos = DBInstanceNetInfos::fromMap($map['DBInstanceNetInfos']);
        }

        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
