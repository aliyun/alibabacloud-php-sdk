<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceIpHostnameResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $ipHostnameInfos;
    protected $_name = [
        'requestId'       => 'RequestId',
        'DBInstanceId'    => 'DBInstanceId',
        'ipHostnameInfos' => 'IpHostnameInfos',
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
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->ipHostnameInfos) {
            $res['IpHostnameInfos'] = $this->ipHostnameInfos;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceIpHostnameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['IpHostnameInfos'])) {
            $model->ipHostnameInfos = $map['IpHostnameInfos'];
        }

        return $model;
    }
}
