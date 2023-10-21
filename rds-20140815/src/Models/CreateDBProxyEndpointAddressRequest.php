<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateDBProxyEndpointAddressRequest extends Model
{
    /**
     * @description The prefix of the proxy endpoint. Enter a custom prefix.
     *
     * @example test1234
     *
     * @var string
     */
    public $connectionStringPrefix;

    /**
     * @description The instance ID. You can call the [DescribeDBInstances](~~610396~~) operation to query the ID of the instance.
     *
     * @example rm-t4n3axxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The network type of the proxy endpoint. Valid values:
     *
     *   **Public**: Internet
     *   **VPC**: Virtual Private Cloud (VPC)
     *   **Classic**: classic network
     *
     * Default value: **Classic**
     * @example Public
     *
     * @var string
     */
    public $DBProxyConnectStringNetType;

    /**
     * @description The ID of the proxy endpoint. You can call the [DescribeDBProxyEndpoint](~~610507~~) operation to query the ID of the proxy endpoint.
     *
     * @example ta9um4xxxxx
     *
     * @var string
     */
    public $DBProxyEndpointId;

    /**
     * @description A reserved parameter. You do not need to specify this parameter.
     *
     * @example normal
     *
     * @var string
     */
    public $DBProxyEngineType;

    /**
     * @description The port number that is associated with the proxy endpoint.
     *
     *   If the instance runs MySQL, the default value is **3306**.
     *   If the instance runs PostgreSQL, the default value is **5432**.
     *
     * @example 3306
     *
     * @var string
     */
    public $DBProxyNewConnectStringPort;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~610399~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmy*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the VPC to which the proxy endpoint belongs. You can call the [DescribeDBInstanceAttribute](~~610394~~) operation to query the VPC ID of the instance.
     *
     * >  This parameter must be specified when DBProxyConnectStringNetType is set to **VPC**.
     * @example vpc-bpxxxxxx
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The ID of the vSwitch that is associated with the specified VPC. You can call the [DescribeDBInstanceAttribute](~~610394~~) operation to query the vSwitch ID of the instance.
     *
     * >  This parameter must be specified when DBProxyConnectStringNetType is set to **VPC**.
     * @example vsw-bpxxxxxx
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'connectionStringPrefix'      => 'ConnectionStringPrefix',
        'DBInstanceId'                => 'DBInstanceId',
        'DBProxyConnectStringNetType' => 'DBProxyConnectStringNetType',
        'DBProxyEndpointId'           => 'DBProxyEndpointId',
        'DBProxyEngineType'           => 'DBProxyEngineType',
        'DBProxyNewConnectStringPort' => 'DBProxyNewConnectStringPort',
        'regionId'                    => 'RegionId',
        'resourceGroupId'             => 'ResourceGroupId',
        'VPCId'                       => 'VPCId',
        'vSwitchId'                   => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionStringPrefix) {
            $res['ConnectionStringPrefix'] = $this->connectionStringPrefix;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBProxyConnectStringNetType) {
            $res['DBProxyConnectStringNetType'] = $this->DBProxyConnectStringNetType;
        }
        if (null !== $this->DBProxyEndpointId) {
            $res['DBProxyEndpointId'] = $this->DBProxyEndpointId;
        }
        if (null !== $this->DBProxyEngineType) {
            $res['DBProxyEngineType'] = $this->DBProxyEngineType;
        }
        if (null !== $this->DBProxyNewConnectStringPort) {
            $res['DBProxyNewConnectStringPort'] = $this->DBProxyNewConnectStringPort;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
     * @return CreateDBProxyEndpointAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionStringPrefix'])) {
            $model->connectionStringPrefix = $map['ConnectionStringPrefix'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBProxyConnectStringNetType'])) {
            $model->DBProxyConnectStringNetType = $map['DBProxyConnectStringNetType'];
        }
        if (isset($map['DBProxyEndpointId'])) {
            $model->DBProxyEndpointId = $map['DBProxyEndpointId'];
        }
        if (isset($map['DBProxyEngineType'])) {
            $model->DBProxyEngineType = $map['DBProxyEngineType'];
        }
        if (isset($map['DBProxyNewConnectStringPort'])) {
            $model->DBProxyNewConnectStringPort = $map['DBProxyNewConnectStringPort'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
