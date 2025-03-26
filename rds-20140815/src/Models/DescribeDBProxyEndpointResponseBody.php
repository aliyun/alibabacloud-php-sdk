<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointResponseBody\DBProxyNodes;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointResponseBody\endpointConnectItems;

class DescribeDBProxyEndpointResponseBody extends Model
{
    /**
     * @var string
     */
    public $causalConsistReadTimeout;

    /**
     * @var string
     */
    public $DBProxyConnectString;

    /**
     * @var string
     */
    public $DBProxyConnectStringNetType;

    /**
     * @var string
     */
    public $DBProxyConnectStringPort;

    /**
     * @var string
     */
    public $DBProxyEndpointId;

    /**
     * @var string
     */
    public $DBProxyEndpointMinSlaveCount;

    /**
     * @var string
     */
    public $DBProxyEngineType;

    /**
     * @var string
     */
    public $DBProxyFeatures;

    /**
     * @var DBProxyNodes
     */
    public $DBProxyNodes;

    /**
     * @var string
     */
    public $dbProxyEndpointAliases;

    /**
     * @var string
     */
    public $dbProxyEndpointReadWriteMode;

    /**
     * @var string
     */
    public $dbProxyEndpointVpcId;

    /**
     * @var string
     */
    public $dbProxyEndpointVswitchId;

    /**
     * @var string
     */
    public $dbProxyEndpointZoneId;

    /**
     * @var endpointConnectItems
     */
    public $endpointConnectItems;

    /**
     * @var string
     */
    public $readOnlyInstanceDistributionType;

    /**
     * @var string
     */
    public $readOnlyInstanceMaxDelayTime;

    /**
     * @var string
     */
    public $readOnlyInstanceWeight;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'causalConsistReadTimeout' => 'CausalConsistReadTimeout',
        'DBProxyConnectString' => 'DBProxyConnectString',
        'DBProxyConnectStringNetType' => 'DBProxyConnectStringNetType',
        'DBProxyConnectStringPort' => 'DBProxyConnectStringPort',
        'DBProxyEndpointId' => 'DBProxyEndpointId',
        'DBProxyEndpointMinSlaveCount' => 'DBProxyEndpointMinSlaveCount',
        'DBProxyEngineType' => 'DBProxyEngineType',
        'DBProxyFeatures' => 'DBProxyFeatures',
        'DBProxyNodes' => 'DBProxyNodes',
        'dbProxyEndpointAliases' => 'DbProxyEndpointAliases',
        'dbProxyEndpointReadWriteMode' => 'DbProxyEndpointReadWriteMode',
        'dbProxyEndpointVpcId' => 'DbProxyEndpointVpcId',
        'dbProxyEndpointVswitchId' => 'DbProxyEndpointVswitchId',
        'dbProxyEndpointZoneId' => 'DbProxyEndpointZoneId',
        'endpointConnectItems' => 'EndpointConnectItems',
        'readOnlyInstanceDistributionType' => 'ReadOnlyInstanceDistributionType',
        'readOnlyInstanceMaxDelayTime' => 'ReadOnlyInstanceMaxDelayTime',
        'readOnlyInstanceWeight' => 'ReadOnlyInstanceWeight',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->DBProxyNodes) {
            $this->DBProxyNodes->validate();
        }
        if (null !== $this->endpointConnectItems) {
            $this->endpointConnectItems->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->causalConsistReadTimeout) {
            $res['CausalConsistReadTimeout'] = $this->causalConsistReadTimeout;
        }

        if (null !== $this->DBProxyConnectString) {
            $res['DBProxyConnectString'] = $this->DBProxyConnectString;
        }

        if (null !== $this->DBProxyConnectStringNetType) {
            $res['DBProxyConnectStringNetType'] = $this->DBProxyConnectStringNetType;
        }

        if (null !== $this->DBProxyConnectStringPort) {
            $res['DBProxyConnectStringPort'] = $this->DBProxyConnectStringPort;
        }

        if (null !== $this->DBProxyEndpointId) {
            $res['DBProxyEndpointId'] = $this->DBProxyEndpointId;
        }

        if (null !== $this->DBProxyEndpointMinSlaveCount) {
            $res['DBProxyEndpointMinSlaveCount'] = $this->DBProxyEndpointMinSlaveCount;
        }

        if (null !== $this->DBProxyEngineType) {
            $res['DBProxyEngineType'] = $this->DBProxyEngineType;
        }

        if (null !== $this->DBProxyFeatures) {
            $res['DBProxyFeatures'] = $this->DBProxyFeatures;
        }

        if (null !== $this->DBProxyNodes) {
            $res['DBProxyNodes'] = null !== $this->DBProxyNodes ? $this->DBProxyNodes->toArray($noStream) : $this->DBProxyNodes;
        }

        if (null !== $this->dbProxyEndpointAliases) {
            $res['DbProxyEndpointAliases'] = $this->dbProxyEndpointAliases;
        }

        if (null !== $this->dbProxyEndpointReadWriteMode) {
            $res['DbProxyEndpointReadWriteMode'] = $this->dbProxyEndpointReadWriteMode;
        }

        if (null !== $this->dbProxyEndpointVpcId) {
            $res['DbProxyEndpointVpcId'] = $this->dbProxyEndpointVpcId;
        }

        if (null !== $this->dbProxyEndpointVswitchId) {
            $res['DbProxyEndpointVswitchId'] = $this->dbProxyEndpointVswitchId;
        }

        if (null !== $this->dbProxyEndpointZoneId) {
            $res['DbProxyEndpointZoneId'] = $this->dbProxyEndpointZoneId;
        }

        if (null !== $this->endpointConnectItems) {
            $res['EndpointConnectItems'] = null !== $this->endpointConnectItems ? $this->endpointConnectItems->toArray($noStream) : $this->endpointConnectItems;
        }

        if (null !== $this->readOnlyInstanceDistributionType) {
            $res['ReadOnlyInstanceDistributionType'] = $this->readOnlyInstanceDistributionType;
        }

        if (null !== $this->readOnlyInstanceMaxDelayTime) {
            $res['ReadOnlyInstanceMaxDelayTime'] = $this->readOnlyInstanceMaxDelayTime;
        }

        if (null !== $this->readOnlyInstanceWeight) {
            $res['ReadOnlyInstanceWeight'] = $this->readOnlyInstanceWeight;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CausalConsistReadTimeout'])) {
            $model->causalConsistReadTimeout = $map['CausalConsistReadTimeout'];
        }

        if (isset($map['DBProxyConnectString'])) {
            $model->DBProxyConnectString = $map['DBProxyConnectString'];
        }

        if (isset($map['DBProxyConnectStringNetType'])) {
            $model->DBProxyConnectStringNetType = $map['DBProxyConnectStringNetType'];
        }

        if (isset($map['DBProxyConnectStringPort'])) {
            $model->DBProxyConnectStringPort = $map['DBProxyConnectStringPort'];
        }

        if (isset($map['DBProxyEndpointId'])) {
            $model->DBProxyEndpointId = $map['DBProxyEndpointId'];
        }

        if (isset($map['DBProxyEndpointMinSlaveCount'])) {
            $model->DBProxyEndpointMinSlaveCount = $map['DBProxyEndpointMinSlaveCount'];
        }

        if (isset($map['DBProxyEngineType'])) {
            $model->DBProxyEngineType = $map['DBProxyEngineType'];
        }

        if (isset($map['DBProxyFeatures'])) {
            $model->DBProxyFeatures = $map['DBProxyFeatures'];
        }

        if (isset($map['DBProxyNodes'])) {
            $model->DBProxyNodes = DBProxyNodes::fromMap($map['DBProxyNodes']);
        }

        if (isset($map['DbProxyEndpointAliases'])) {
            $model->dbProxyEndpointAliases = $map['DbProxyEndpointAliases'];
        }

        if (isset($map['DbProxyEndpointReadWriteMode'])) {
            $model->dbProxyEndpointReadWriteMode = $map['DbProxyEndpointReadWriteMode'];
        }

        if (isset($map['DbProxyEndpointVpcId'])) {
            $model->dbProxyEndpointVpcId = $map['DbProxyEndpointVpcId'];
        }

        if (isset($map['DbProxyEndpointVswitchId'])) {
            $model->dbProxyEndpointVswitchId = $map['DbProxyEndpointVswitchId'];
        }

        if (isset($map['DbProxyEndpointZoneId'])) {
            $model->dbProxyEndpointZoneId = $map['DbProxyEndpointZoneId'];
        }

        if (isset($map['EndpointConnectItems'])) {
            $model->endpointConnectItems = endpointConnectItems::fromMap($map['EndpointConnectItems']);
        }

        if (isset($map['ReadOnlyInstanceDistributionType'])) {
            $model->readOnlyInstanceDistributionType = $map['ReadOnlyInstanceDistributionType'];
        }

        if (isset($map['ReadOnlyInstanceMaxDelayTime'])) {
            $model->readOnlyInstanceMaxDelayTime = $map['ReadOnlyInstanceMaxDelayTime'];
        }

        if (isset($map['ReadOnlyInstanceWeight'])) {
            $model->readOnlyInstanceWeight = $map['ReadOnlyInstanceWeight'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
