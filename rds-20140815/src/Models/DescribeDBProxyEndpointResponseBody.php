<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointResponseBody\endpointConnectItems;
use AlibabaCloud\Tea\Model;

class DescribeDBProxyEndpointResponseBody extends Model
{
    /**
     * @var string
     */
    public $readOnlyInstanceDistributionType;

    /**
     * @var string
     */
    public $dbProxyEndpointReadWriteMode;

    /**
     * @var string
     */
    public $DBProxyConnectString;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $DBProxyEndpointId;

    /**
     * @var string
     */
    public $dbProxyEndpointAliases;

    /**
     * @var string
     */
    public $DBProxyFeatures;

    /**
     * @var string
     */
    public $readOnlyInstanceWeight;

    /**
     * @var string
     */
    public $readOnlyInstanceMaxDelayTime;

    /**
     * @var string
     */
    public $DBProxyConnectStringNetType;

    /**
     * @var endpointConnectItems
     */
    public $endpointConnectItems;

    /**
     * @var string
     */
    public $DBProxyConnectStringPort;
    protected $_name = [
        'readOnlyInstanceDistributionType' => 'ReadOnlyInstanceDistributionType',
        'dbProxyEndpointReadWriteMode'     => 'DbProxyEndpointReadWriteMode',
        'DBProxyConnectString'             => 'DBProxyConnectString',
        'requestId'                        => 'RequestId',
        'DBProxyEndpointId'                => 'DBProxyEndpointId',
        'dbProxyEndpointAliases'           => 'DbProxyEndpointAliases',
        'DBProxyFeatures'                  => 'DBProxyFeatures',
        'readOnlyInstanceWeight'           => 'ReadOnlyInstanceWeight',
        'readOnlyInstanceMaxDelayTime'     => 'ReadOnlyInstanceMaxDelayTime',
        'DBProxyConnectStringNetType'      => 'DBProxyConnectStringNetType',
        'endpointConnectItems'             => 'EndpointConnectItems',
        'DBProxyConnectStringPort'         => 'DBProxyConnectStringPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->readOnlyInstanceDistributionType) {
            $res['ReadOnlyInstanceDistributionType'] = $this->readOnlyInstanceDistributionType;
        }
        if (null !== $this->dbProxyEndpointReadWriteMode) {
            $res['DbProxyEndpointReadWriteMode'] = $this->dbProxyEndpointReadWriteMode;
        }
        if (null !== $this->DBProxyConnectString) {
            $res['DBProxyConnectString'] = $this->DBProxyConnectString;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBProxyEndpointId) {
            $res['DBProxyEndpointId'] = $this->DBProxyEndpointId;
        }
        if (null !== $this->dbProxyEndpointAliases) {
            $res['DbProxyEndpointAliases'] = $this->dbProxyEndpointAliases;
        }
        if (null !== $this->DBProxyFeatures) {
            $res['DBProxyFeatures'] = $this->DBProxyFeatures;
        }
        if (null !== $this->readOnlyInstanceWeight) {
            $res['ReadOnlyInstanceWeight'] = $this->readOnlyInstanceWeight;
        }
        if (null !== $this->readOnlyInstanceMaxDelayTime) {
            $res['ReadOnlyInstanceMaxDelayTime'] = $this->readOnlyInstanceMaxDelayTime;
        }
        if (null !== $this->DBProxyConnectStringNetType) {
            $res['DBProxyConnectStringNetType'] = $this->DBProxyConnectStringNetType;
        }
        if (null !== $this->endpointConnectItems) {
            $res['EndpointConnectItems'] = null !== $this->endpointConnectItems ? $this->endpointConnectItems->toMap() : null;
        }
        if (null !== $this->DBProxyConnectStringPort) {
            $res['DBProxyConnectStringPort'] = $this->DBProxyConnectStringPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBProxyEndpointResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReadOnlyInstanceDistributionType'])) {
            $model->readOnlyInstanceDistributionType = $map['ReadOnlyInstanceDistributionType'];
        }
        if (isset($map['DbProxyEndpointReadWriteMode'])) {
            $model->dbProxyEndpointReadWriteMode = $map['DbProxyEndpointReadWriteMode'];
        }
        if (isset($map['DBProxyConnectString'])) {
            $model->DBProxyConnectString = $map['DBProxyConnectString'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBProxyEndpointId'])) {
            $model->DBProxyEndpointId = $map['DBProxyEndpointId'];
        }
        if (isset($map['DbProxyEndpointAliases'])) {
            $model->dbProxyEndpointAliases = $map['DbProxyEndpointAliases'];
        }
        if (isset($map['DBProxyFeatures'])) {
            $model->DBProxyFeatures = $map['DBProxyFeatures'];
        }
        if (isset($map['ReadOnlyInstanceWeight'])) {
            $model->readOnlyInstanceWeight = $map['ReadOnlyInstanceWeight'];
        }
        if (isset($map['ReadOnlyInstanceMaxDelayTime'])) {
            $model->readOnlyInstanceMaxDelayTime = $map['ReadOnlyInstanceMaxDelayTime'];
        }
        if (isset($map['DBProxyConnectStringNetType'])) {
            $model->DBProxyConnectStringNetType = $map['DBProxyConnectStringNetType'];
        }
        if (isset($map['EndpointConnectItems'])) {
            $model->endpointConnectItems = endpointConnectItems::fromMap($map['EndpointConnectItems']);
        }
        if (isset($map['DBProxyConnectStringPort'])) {
            $model->DBProxyConnectStringPort = $map['DBProxyConnectStringPort'];
        }

        return $model;
    }
}
