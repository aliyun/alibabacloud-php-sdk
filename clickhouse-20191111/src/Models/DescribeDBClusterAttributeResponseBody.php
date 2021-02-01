<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAttributeResponseBody\DBCluster;
use AlibabaCloud\Tea\Model;

class DescribeDBClusterAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var DBCluster
     */
    public $DBCluster;
    protected $_name = [
        'requestId' => 'RequestId',
        'DBCluster' => 'DBCluster',
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
        if (null !== $this->DBCluster) {
            $res['DBCluster'] = null !== $this->DBCluster ? $this->DBCluster->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBCluster'])) {
            $model->DBCluster = DBCluster::fromMap($map['DBCluster']);
        }

        return $model;
    }
}
