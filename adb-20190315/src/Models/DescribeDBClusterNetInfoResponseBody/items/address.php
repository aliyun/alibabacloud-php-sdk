<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterNetInfoResponseBody\items;

use AlibabaCloud\Tea\Model;

class address extends Model
{
    /**
     * @description The endpoint of the cluster.
     *
     * @example am-bpxxxxxxxx.ads.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The prefix of the cluster endpoint.
     *
     * @example am-bpxxxxxxxx89k51380
     *
     * @var string
     */
    public $connectionStringPrefix;

    /**
     * @description The IP address.
     *
     * @example 192.168.x.x
     *
     * @var string
     */
    public $IPAddress;

    /**
     * @description The network type of the endpoint. Valid values:
     *
     *   **Public**: public endpoint
     *   **VPC**: Virtual Private Cloud (VPC) endpoint
     *
     * @example VPC
     *
     * @var string
     */
    public $netType;

    /**
     * @description The port number that is used to connect to the cluster.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The ID of the VPC.
     *
     * >  This parameter is empty when Public is returned for NetType.
     * @example vpc-xxxxxxxxx
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The ID of the vSwitch.
     *
     * >  This parameter is empty when Public is returned for NetType.
     * @example vsw-xxxxxx
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'connectionString'       => 'ConnectionString',
        'connectionStringPrefix' => 'ConnectionStringPrefix',
        'IPAddress'              => 'IPAddress',
        'netType'                => 'NetType',
        'port'                   => 'Port',
        'VPCId'                  => 'VPCId',
        'vSwitchId'              => 'VSwitchId',
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
        if (null !== $this->connectionStringPrefix) {
            $res['ConnectionStringPrefix'] = $this->connectionStringPrefix;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return address
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['ConnectionStringPrefix'])) {
            $model->connectionStringPrefix = $map['ConnectionStringPrefix'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
