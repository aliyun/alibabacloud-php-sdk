<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody\DBProxyConnectStringItems;

use AlibabaCloud\Tea\Model;

class DBProxyConnectStringItems extends Model
{
    /**
     * @description The database proxy endpoint.
     *
     * @example gos787jog2wk0ye1****-rw4rm.rwlb.rds.aliyuncs.com
     *
     * @var string
     */
    public $DBProxyConnectString;

    /**
     * @description The network type of the database proxy endpoint. A database proxy endpoint is formerly referred to as a proxy terminal. Valid values:
     *
     *   OuterString: Internet
     *   InnerString: internal network
     *
     * @example InnerString
     *
     * @var string
     */
    public $DBProxyConnectStringNetType;

    /**
     * @description The network type of the database proxy. Valid values:
     *
     *   0: Internet
     *   1: classic network
     *   2: virtual private cloud (VPC)
     *
     * @example 2
     *
     * @var string
     */
    public $DBProxyConnectStringNetWorkType;

    /**
     * @description The port that is associated with the database proxy endpoint.
     *
     * @example 3306
     *
     * @var string
     */
    public $DBProxyConnectStringPort;

    /**
     * @description The ID of the backend database proxy endpoint.
     *
     * @example 20****
     *
     * @var string
     */
    public $DBProxyEndpointId;

    /**
     * @description The name of the database proxy endpoint. The name can be replaced by the ID of the database proxy endpoint.
     *
     * @example gos787jog2wk0ye1****
     *
     * @var string
     */
    public $DBProxyEndpointName;

    /**
     * @description The VPC of the database proxy.
     *
     * @example vpc-uf6oobt****
     *
     * @var string
     */
    public $DBProxyVpcId;

    /**
     * @description The ID of the database proxy instance.
     *
     * @example rm-bp145737x5****131161274792****
     *
     * @var string
     */
    public $DBProxyVpcInstanceId;

    /**
     * @description The vSwitch of the database proxy.
     *
     * @example vsw-uf6l0pic17****
     *
     * @var string
     */
    public $DBProxyVswitchId;
    protected $_name = [
        'DBProxyConnectString'            => 'DBProxyConnectString',
        'DBProxyConnectStringNetType'     => 'DBProxyConnectStringNetType',
        'DBProxyConnectStringNetWorkType' => 'DBProxyConnectStringNetWorkType',
        'DBProxyConnectStringPort'        => 'DBProxyConnectStringPort',
        'DBProxyEndpointId'               => 'DBProxyEndpointId',
        'DBProxyEndpointName'             => 'DBProxyEndpointName',
        'DBProxyVpcId'                    => 'DBProxyVpcId',
        'DBProxyVpcInstanceId'            => 'DBProxyVpcInstanceId',
        'DBProxyVswitchId'                => 'DBProxyVswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBProxyConnectString) {
            $res['DBProxyConnectString'] = $this->DBProxyConnectString;
        }
        if (null !== $this->DBProxyConnectStringNetType) {
            $res['DBProxyConnectStringNetType'] = $this->DBProxyConnectStringNetType;
        }
        if (null !== $this->DBProxyConnectStringNetWorkType) {
            $res['DBProxyConnectStringNetWorkType'] = $this->DBProxyConnectStringNetWorkType;
        }
        if (null !== $this->DBProxyConnectStringPort) {
            $res['DBProxyConnectStringPort'] = $this->DBProxyConnectStringPort;
        }
        if (null !== $this->DBProxyEndpointId) {
            $res['DBProxyEndpointId'] = $this->DBProxyEndpointId;
        }
        if (null !== $this->DBProxyEndpointName) {
            $res['DBProxyEndpointName'] = $this->DBProxyEndpointName;
        }
        if (null !== $this->DBProxyVpcId) {
            $res['DBProxyVpcId'] = $this->DBProxyVpcId;
        }
        if (null !== $this->DBProxyVpcInstanceId) {
            $res['DBProxyVpcInstanceId'] = $this->DBProxyVpcInstanceId;
        }
        if (null !== $this->DBProxyVswitchId) {
            $res['DBProxyVswitchId'] = $this->DBProxyVswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBProxyConnectStringItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBProxyConnectString'])) {
            $model->DBProxyConnectString = $map['DBProxyConnectString'];
        }
        if (isset($map['DBProxyConnectStringNetType'])) {
            $model->DBProxyConnectStringNetType = $map['DBProxyConnectStringNetType'];
        }
        if (isset($map['DBProxyConnectStringNetWorkType'])) {
            $model->DBProxyConnectStringNetWorkType = $map['DBProxyConnectStringNetWorkType'];
        }
        if (isset($map['DBProxyConnectStringPort'])) {
            $model->DBProxyConnectStringPort = $map['DBProxyConnectStringPort'];
        }
        if (isset($map['DBProxyEndpointId'])) {
            $model->DBProxyEndpointId = $map['DBProxyEndpointId'];
        }
        if (isset($map['DBProxyEndpointName'])) {
            $model->DBProxyEndpointName = $map['DBProxyEndpointName'];
        }
        if (isset($map['DBProxyVpcId'])) {
            $model->DBProxyVpcId = $map['DBProxyVpcId'];
        }
        if (isset($map['DBProxyVpcInstanceId'])) {
            $model->DBProxyVpcInstanceId = $map['DBProxyVpcInstanceId'];
        }
        if (isset($map['DBProxyVswitchId'])) {
            $model->DBProxyVswitchId = $map['DBProxyVswitchId'];
        }

        return $model;
    }
}
