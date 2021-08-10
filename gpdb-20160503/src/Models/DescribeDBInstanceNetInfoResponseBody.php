<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceNetInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var DBInstanceNetInfos
     */
    public $DBInstanceNetInfos;

    /**
     * @var string
     */
    public $instanceNetworkType;
    protected $_name = [
        'requestId'           => 'RequestId',
        'DBInstanceNetInfos'  => 'DBInstanceNetInfos',
        'instanceNetworkType' => 'InstanceNetworkType',
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
        if (null !== $this->DBInstanceNetInfos) {
            $res['DBInstanceNetInfos'] = null !== $this->DBInstanceNetInfos ? $this->DBInstanceNetInfos->toMap() : null;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceNetInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBInstanceNetInfos'])) {
            $model->DBInstanceNetInfos = DBInstanceNetInfos::fromMap($map['DBInstanceNetInfos']);
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }

        return $model;
    }
}
