<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterNetInfoItemsResponseBody\netInfoItems;

use AlibabaCloud\Tea\Model;

class netInfoItem extends Model
{
    /**
     * @example cc-bp1554t789i8e****.clickhouse.ads.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @example 8123
     *
     * @var string
     */
    public $httpPort;

    /**
     * @var string
     */
    public $httpsPort;

    /**
     * @example 10.255.234.251
     *
     * @var string
     */
    public $IPAddress;

    /**
     * @example 3306
     *
     * @var string
     */
    public $jdbcPort;

    /**
     * @var string
     */
    public $mySQLPort;

    /**
     * @example VPC
     *
     * @var string
     */
    public $netType;

    /**
     * @example vsw-bp1gzt31twhlo0sa5****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-bp175iuvg8nxqraf2****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'connectionString' => 'ConnectionString',
        'httpPort'         => 'HttpPort',
        'httpsPort'        => 'HttpsPort',
        'IPAddress'        => 'IPAddress',
        'jdbcPort'         => 'JdbcPort',
        'mySQLPort'        => 'MySQLPort',
        'netType'          => 'NetType',
        'vSwitchId'        => 'VSwitchId',
        'vpcId'            => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->httpPort) {
            $res['HttpPort'] = $this->httpPort;
        }
        if (null !== $this->httpsPort) {
            $res['HttpsPort'] = $this->httpsPort;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }
        if (null !== $this->jdbcPort) {
            $res['JdbcPort'] = $this->jdbcPort;
        }
        if (null !== $this->mySQLPort) {
            $res['MySQLPort'] = $this->mySQLPort;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return netInfoItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['HttpPort'])) {
            $model->httpPort = $map['HttpPort'];
        }
        if (isset($map['HttpsPort'])) {
            $model->httpsPort = $map['HttpsPort'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }
        if (isset($map['JdbcPort'])) {
            $model->jdbcPort = $map['JdbcPort'];
        }
        if (isset($map['MySQLPort'])) {
            $model->mySQLPort = $map['MySQLPort'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
