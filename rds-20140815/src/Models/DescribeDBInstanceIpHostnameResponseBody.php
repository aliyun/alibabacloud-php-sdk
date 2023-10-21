<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceIpHostnameResponseBody extends Model
{
    /**
     * @description The instance ID.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The internal IP addresses and hostnames of the ECS instances on which the primary and secondary instances reside. Format: `IP address 1,Hostname 1;IP address 2,Hostname 2`.
     *
     * @example 172.16.xx.xx,sdxxxxxxxxB;172.16.xx.xx,sdxxxxxxxxA
     *
     * @var string
     */
    public $ipHostnameInfos;

    /**
     * @description The request ID.
     *
     * @example 67CD4719-51E3-4A76-A38C-02F45FAE7E36
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceId'    => 'DBInstanceId',
        'ipHostnameInfos' => 'IpHostnameInfos',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->ipHostnameInfos) {
            $res['IpHostnameInfos'] = $this->ipHostnameInfos;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['IpHostnameInfos'])) {
            $model->ipHostnameInfos = $map['IpHostnameInfos'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
