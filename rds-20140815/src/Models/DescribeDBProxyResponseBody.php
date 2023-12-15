<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody\DBProxyAVZones;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody\DBProxyConnectStringItems;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody\dbProxyEndpointItems;
use AlibabaCloud\Tea\Model;

class DescribeDBProxyResponseBody extends Model
{
    /**
     * @description The list of zones that are available for the database proxy.
     *
     * @var DBProxyAVZones
     */
    public $DBProxyAVZones;

    /**
     * @description An array consisting of the information about the database proxy endpoint that is created for the instance.
     *
     * @var DBProxyConnectStringItems
     */
    public $DBProxyConnectStringItems;

    /**
     * @description An internal parameter. You can ignore this parameter.
     *
     * @example normal
     *
     * @var string
     */
    public $DBProxyEngineType;

    /**
     * @description The version of the proxy instance.
     *
     * @example 1.13.11
     *
     * @var string
     */
    public $DBProxyInstanceCurrentMinorVersion;

    /**
     * @description The latest version that is available for the proxy instance.
     *
     * @example 1.13.12
     *
     * @var string
     */
    public $DBProxyInstanceLatestMinorVersion;

    /**
     * @description The name of the proxy instance.
     *
     * @example gos787jog2wk0ye1****
     *
     * @var string
     */
    public $DBProxyInstanceName;

    /**
     * @description The number of proxies that are enabled on the instance.
     *
     * @example 1
     *
     * @var int
     */
    public $DBProxyInstanceNum;

    /**
     * @description This parameter is available only for ApsaraDB RDS for PostgreSQL instances. The specifications of the proxy instance that is enabled.
     *
     * For example, a value of 4/8 indicates that the proxy instance has 4 cores and 8 GB of memory.
     * @example 4/8
     *
     * @var string
     */
    public $DBProxyInstanceSize;

    /**
     * @description The status of the proxy instance.
     *
     *   DBInstanceClassChanging: The specifications of the proxy instance are being changed.
     *   Creating: The proxy instance is being created.
     *   Running: The proxy instance is running.
     *   Deleting: The proxy instance is being deleted.
     *
     * @example Running
     *
     * @var string
     */
    public $DBProxyInstanceStatus;

    /**
     * @description The type of the database proxy that is enabled on the instance.
     *
     *   1: shared proxy
     *   2: dedicated proxy
     *
     * >  ApsaraDB RDS for PostgreSQL instances support only dedicated proxies.
     * @example 2
     *
     * @var string
     */
    public $DBProxyInstanceType;

    /**
     * @var string
     */
    public $DBProxyPersistentConnectionStatus;

    /**
     * @description The status of the database proxy.
     *
     *   Shutdown: disabled
     *   Startup: enabled
     *
     * @example Startup
     *
     * @var string
     */
    public $DBProxyServiceStatus;

    /**
     * @description The proxy terminals of the instance.
     *
     * @var dbProxyEndpointItems
     */
    public $dbProxyEndpointItems;

    /**
     * @description The ID of the request.
     *
     * @example 909A69EE-71C8-4417-A0B9-FF085407E1E3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmy*****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'DBProxyAVZones'                     => 'DBProxyAVZones',
        'DBProxyConnectStringItems'          => 'DBProxyConnectStringItems',
        'DBProxyEngineType'                  => 'DBProxyEngineType',
        'DBProxyInstanceCurrentMinorVersion' => 'DBProxyInstanceCurrentMinorVersion',
        'DBProxyInstanceLatestMinorVersion'  => 'DBProxyInstanceLatestMinorVersion',
        'DBProxyInstanceName'                => 'DBProxyInstanceName',
        'DBProxyInstanceNum'                 => 'DBProxyInstanceNum',
        'DBProxyInstanceSize'                => 'DBProxyInstanceSize',
        'DBProxyInstanceStatus'              => 'DBProxyInstanceStatus',
        'DBProxyInstanceType'                => 'DBProxyInstanceType',
        'DBProxyPersistentConnectionStatus'  => 'DBProxyPersistentConnectionStatus',
        'DBProxyServiceStatus'               => 'DBProxyServiceStatus',
        'dbProxyEndpointItems'               => 'DbProxyEndpointItems',
        'requestId'                          => 'RequestId',
        'resourceGroupId'                    => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBProxyAVZones) {
            $res['DBProxyAVZones'] = null !== $this->DBProxyAVZones ? $this->DBProxyAVZones->toMap() : null;
        }
        if (null !== $this->DBProxyConnectStringItems) {
            $res['DBProxyConnectStringItems'] = null !== $this->DBProxyConnectStringItems ? $this->DBProxyConnectStringItems->toMap() : null;
        }
        if (null !== $this->DBProxyEngineType) {
            $res['DBProxyEngineType'] = $this->DBProxyEngineType;
        }
        if (null !== $this->DBProxyInstanceCurrentMinorVersion) {
            $res['DBProxyInstanceCurrentMinorVersion'] = $this->DBProxyInstanceCurrentMinorVersion;
        }
        if (null !== $this->DBProxyInstanceLatestMinorVersion) {
            $res['DBProxyInstanceLatestMinorVersion'] = $this->DBProxyInstanceLatestMinorVersion;
        }
        if (null !== $this->DBProxyInstanceName) {
            $res['DBProxyInstanceName'] = $this->DBProxyInstanceName;
        }
        if (null !== $this->DBProxyInstanceNum) {
            $res['DBProxyInstanceNum'] = $this->DBProxyInstanceNum;
        }
        if (null !== $this->DBProxyInstanceSize) {
            $res['DBProxyInstanceSize'] = $this->DBProxyInstanceSize;
        }
        if (null !== $this->DBProxyInstanceStatus) {
            $res['DBProxyInstanceStatus'] = $this->DBProxyInstanceStatus;
        }
        if (null !== $this->DBProxyInstanceType) {
            $res['DBProxyInstanceType'] = $this->DBProxyInstanceType;
        }
        if (null !== $this->DBProxyPersistentConnectionStatus) {
            $res['DBProxyPersistentConnectionStatus'] = $this->DBProxyPersistentConnectionStatus;
        }
        if (null !== $this->DBProxyServiceStatus) {
            $res['DBProxyServiceStatus'] = $this->DBProxyServiceStatus;
        }
        if (null !== $this->dbProxyEndpointItems) {
            $res['DbProxyEndpointItems'] = null !== $this->dbProxyEndpointItems ? $this->dbProxyEndpointItems->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBProxyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBProxyAVZones'])) {
            $model->DBProxyAVZones = DBProxyAVZones::fromMap($map['DBProxyAVZones']);
        }
        if (isset($map['DBProxyConnectStringItems'])) {
            $model->DBProxyConnectStringItems = DBProxyConnectStringItems::fromMap($map['DBProxyConnectStringItems']);
        }
        if (isset($map['DBProxyEngineType'])) {
            $model->DBProxyEngineType = $map['DBProxyEngineType'];
        }
        if (isset($map['DBProxyInstanceCurrentMinorVersion'])) {
            $model->DBProxyInstanceCurrentMinorVersion = $map['DBProxyInstanceCurrentMinorVersion'];
        }
        if (isset($map['DBProxyInstanceLatestMinorVersion'])) {
            $model->DBProxyInstanceLatestMinorVersion = $map['DBProxyInstanceLatestMinorVersion'];
        }
        if (isset($map['DBProxyInstanceName'])) {
            $model->DBProxyInstanceName = $map['DBProxyInstanceName'];
        }
        if (isset($map['DBProxyInstanceNum'])) {
            $model->DBProxyInstanceNum = $map['DBProxyInstanceNum'];
        }
        if (isset($map['DBProxyInstanceSize'])) {
            $model->DBProxyInstanceSize = $map['DBProxyInstanceSize'];
        }
        if (isset($map['DBProxyInstanceStatus'])) {
            $model->DBProxyInstanceStatus = $map['DBProxyInstanceStatus'];
        }
        if (isset($map['DBProxyInstanceType'])) {
            $model->DBProxyInstanceType = $map['DBProxyInstanceType'];
        }
        if (isset($map['DBProxyPersistentConnectionStatus'])) {
            $model->DBProxyPersistentConnectionStatus = $map['DBProxyPersistentConnectionStatus'];
        }
        if (isset($map['DBProxyServiceStatus'])) {
            $model->DBProxyServiceStatus = $map['DBProxyServiceStatus'];
        }
        if (isset($map['DbProxyEndpointItems'])) {
            $model->dbProxyEndpointItems = dbProxyEndpointItems::fromMap($map['DbProxyEndpointItems']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
