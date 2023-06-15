<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody\data\DBInstanceEndpoints\DBInstanceEndpoint\addressItems;

use AlibabaCloud\Tea\Model;

class addressItem extends Model
{
    /**
     * @description The endpoint of the instance.
     *
     * @example rm****.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The IP address of the endpoint.
     *
     * @example 10.71.XX.XX
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description The type of the IP address. Valid values:
     *
     *   **Public**: Internet
     *   **Private**: internal network
     *
     * @example Private
     *
     * @var string
     */
    public $ipType;

    /**
     * @description The port number of the endpoint.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp12u14ecz****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-bp17xdic25d****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'connectionString' => 'ConnectionString',
        'ipAddress'        => 'IpAddress',
        'ipType'           => 'IpType',
        'port'             => 'Port',
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
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
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
     * @return addressItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
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
