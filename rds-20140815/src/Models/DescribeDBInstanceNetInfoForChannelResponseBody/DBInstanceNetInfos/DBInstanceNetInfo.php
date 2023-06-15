<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoForChannelResponseBody\DBInstanceNetInfos;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoForChannelResponseBody\DBInstanceNetInfos\DBInstanceNetInfo\DBInstanceWeights;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoForChannelResponseBody\DBInstanceNetInfos\DBInstanceNetInfo\securityIPGroups;
use AlibabaCloud\Tea\Model;

class DBInstanceNetInfo extends Model
{
    /**
     * @description The availability of the instance. Valid values:
     *
     *   **Unavailable**
     *   **Available**
     *
     * @example Unavailable
     *
     * @var string
     */
    public $availability;

    /**
     * @description The endpoint of the instance.
     *
     * @example rm-uf6w*****.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The type of the endpoint. Valid values:
     *
     *   **Normal**: a regular endpoint
     *   **ReadWriteSplitting**: a read/write splitting endpoint that is assigned after the shared proxy feature is enabled.
     *
     * @example Normal
     *
     * @var string
     */
    public $connectionStringType;

    /**
     * @description An array that consists of the information about read weights to implement read/write splitting after the shared proxy feature is enabled.
     *
     * @var DBInstanceWeights
     */
    public $DBInstanceWeights;

    /**
     * @description The policy that is used to assign read weights. This parameter is returned only for a read/write splitting endpoint that is assigned after the shared proxy feature is enabled. Valid values:
     *
     *   **Standard**: The system automatically allocates read weights to the instance and its read-only instances based on the specifications of the instances.
     *   **Custom**: You must manually assign read weights to the instance and its read-only instances.
     *
     * @example Standard
     *
     * @var string
     */
    public $distributionType;

    /**
     * @description The IP address.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $IPAddress;

    /**
     * @description The network type of the IP address. Valid values:
     *
     *   **Public**: the Internet
     *   **Inner**: the classic network
     *   **Private**: a VPC
     *
     * @example Inner
     *
     * @var string
     */
    public $IPType;

    /**
     * @description The latency threshold that is allowed for read/write splitting of the shared proxy feature. Unit: seconds
     *
     * > This parameter is returned only when the **ConnectionStringType** parameter is set to **ReadWriteSplitting**.
     * @example 12
     *
     * @var string
     */
    public $maxDelayTime;

    /**
     * @description The service port number.
     *
     * @example 6379
     *
     * @var string
     */
    public $port;

    /**
     * @description An array that consists of the details about the IP address whitelist.
     *
     * @var securityIPGroups
     */
    public $securityIPGroups;

    /**
     * @description An internal parameter. This operation does not return a value for this parameter.
     *
     * @example Disabled
     *
     * @var string
     */
    public $upgradeable;

    /**
     * @description The ID of the VPC in which the instance is deployed.
     *
     * @example vpc-bp1nme44gek34slfc****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The ID of the vSwitch to which the instance belongs.
     *
     * @example vsw-bp1e7clcw529l773d****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The expiration time of the endpoint of the classic network type. Unit: seconds.
     *
     * @example 5183779
     *
     * @var string
     */
    public $expiredTime;
    protected $_name = [
        'availability'         => 'Availability',
        'connectionString'     => 'ConnectionString',
        'connectionStringType' => 'ConnectionStringType',
        'DBInstanceWeights'    => 'DBInstanceWeights',
        'distributionType'     => 'DistributionType',
        'IPAddress'            => 'IPAddress',
        'IPType'               => 'IPType',
        'maxDelayTime'         => 'MaxDelayTime',
        'port'                 => 'Port',
        'securityIPGroups'     => 'SecurityIPGroups',
        'upgradeable'          => 'Upgradeable',
        'VPCId'                => 'VPCId',
        'vSwitchId'            => 'VSwitchId',
        'expiredTime'          => 'expiredTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availability) {
            $res['Availability'] = $this->availability;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->connectionStringType) {
            $res['ConnectionStringType'] = $this->connectionStringType;
        }
        if (null !== $this->DBInstanceWeights) {
            $res['DBInstanceWeights'] = null !== $this->DBInstanceWeights ? $this->DBInstanceWeights->toMap() : null;
        }
        if (null !== $this->distributionType) {
            $res['DistributionType'] = $this->distributionType;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }
        if (null !== $this->IPType) {
            $res['IPType'] = $this->IPType;
        }
        if (null !== $this->maxDelayTime) {
            $res['MaxDelayTime'] = $this->maxDelayTime;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->securityIPGroups) {
            $res['SecurityIPGroups'] = null !== $this->securityIPGroups ? $this->securityIPGroups->toMap() : null;
        }
        if (null !== $this->upgradeable) {
            $res['Upgradeable'] = $this->upgradeable;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->expiredTime) {
            $res['expiredTime'] = $this->expiredTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceNetInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Availability'])) {
            $model->availability = $map['Availability'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['ConnectionStringType'])) {
            $model->connectionStringType = $map['ConnectionStringType'];
        }
        if (isset($map['DBInstanceWeights'])) {
            $model->DBInstanceWeights = DBInstanceWeights::fromMap($map['DBInstanceWeights']);
        }
        if (isset($map['DistributionType'])) {
            $model->distributionType = $map['DistributionType'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }
        if (isset($map['IPType'])) {
            $model->IPType = $map['IPType'];
        }
        if (isset($map['MaxDelayTime'])) {
            $model->maxDelayTime = $map['MaxDelayTime'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['SecurityIPGroups'])) {
            $model->securityIPGroups = securityIPGroups::fromMap($map['SecurityIPGroups']);
        }
        if (isset($map['Upgradeable'])) {
            $model->upgradeable = $map['Upgradeable'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['expiredTime'])) {
            $model->expiredTime = $map['expiredTime'];
        }

        return $model;
    }
}
