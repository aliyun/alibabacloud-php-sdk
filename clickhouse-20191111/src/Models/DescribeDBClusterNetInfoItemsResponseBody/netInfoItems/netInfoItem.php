<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterNetInfoItemsResponseBody\netInfoItems;

use AlibabaCloud\Tea\Model;

class netInfoItem extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $jdbcPort;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $httpPort;

    /**
     * @var string
     */
    public $IPAddress;
    protected $_name = [
        'vpcId'            => 'VpcId',
        'vSwitchId'        => 'VSwitchId',
        'connectionString' => 'ConnectionString',
        'jdbcPort'         => 'JdbcPort',
        'netType'          => 'NetType',
        'httpPort'         => 'HttpPort',
        'IPAddress'        => 'IPAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->jdbcPort) {
            $res['JdbcPort'] = $this->jdbcPort;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->httpPort) {
            $res['HttpPort'] = $this->httpPort;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['JdbcPort'])) {
            $model->jdbcPort = $map['JdbcPort'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['HttpPort'])) {
            $model->httpPort = $map['HttpPort'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }

        return $model;
    }
}
