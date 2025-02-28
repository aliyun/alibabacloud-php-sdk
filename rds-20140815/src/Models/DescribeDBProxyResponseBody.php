<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody\DBProxyAVZones;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody\DBProxyConnectStringItems;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody\dbProxyEndpointItems;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody\DBProxyNodes;

class DescribeDBProxyResponseBody extends Model
{
    /**
     * @var DBProxyAVZones
     */
    public $DBProxyAVZones;
    /**
     * @var DBProxyConnectStringItems
     */
    public $DBProxyConnectStringItems;
    /**
     * @var string
     */
    public $DBProxyEngineType;
    /**
     * @var string
     */
    public $DBProxyInstanceCurrentMinorVersion;
    /**
     * @var string
     */
    public $DBProxyInstanceLatestMinorVersion;
    /**
     * @var string
     */
    public $DBProxyInstanceName;
    /**
     * @var int
     */
    public $DBProxyInstanceNum;
    /**
     * @var string
     */
    public $DBProxyInstanceSize;
    /**
     * @var string
     */
    public $DBProxyInstanceStatus;
    /**
     * @var string
     */
    public $DBProxyInstanceType;
    /**
     * @var string
     */
    public $DBProxyKindCode;
    /**
     * @var DBProxyNodes
     */
    public $DBProxyNodes;
    /**
     * @var string
     */
    public $DBProxyPersistentConnectionStatus;
    /**
     * @var string
     */
    public $DBProxyServiceStatus;
    /**
     * @var dbProxyEndpointItems
     */
    public $dbProxyEndpointItems;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        'DBProxyKindCode'                    => 'DBProxyKindCode',
        'DBProxyNodes'                       => 'DBProxyNodes',
        'DBProxyPersistentConnectionStatus'  => 'DBProxyPersistentConnectionStatus',
        'DBProxyServiceStatus'               => 'DBProxyServiceStatus',
        'dbProxyEndpointItems'               => 'DbProxyEndpointItems',
        'requestId'                          => 'RequestId',
        'resourceGroupId'                    => 'ResourceGroupId',
    ];

    public function validate()
    {
        if (null !== $this->DBProxyAVZones) {
            $this->DBProxyAVZones->validate();
        }
        if (null !== $this->DBProxyConnectStringItems) {
            $this->DBProxyConnectStringItems->validate();
        }
        if (null !== $this->DBProxyNodes) {
            $this->DBProxyNodes->validate();
        }
        if (null !== $this->dbProxyEndpointItems) {
            $this->dbProxyEndpointItems->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBProxyAVZones) {
            $res['DBProxyAVZones'] = null !== $this->DBProxyAVZones ? $this->DBProxyAVZones->toArray($noStream) : $this->DBProxyAVZones;
        }

        if (null !== $this->DBProxyConnectStringItems) {
            $res['DBProxyConnectStringItems'] = null !== $this->DBProxyConnectStringItems ? $this->DBProxyConnectStringItems->toArray($noStream) : $this->DBProxyConnectStringItems;
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

        if (null !== $this->DBProxyKindCode) {
            $res['DBProxyKindCode'] = $this->DBProxyKindCode;
        }

        if (null !== $this->DBProxyNodes) {
            $res['DBProxyNodes'] = null !== $this->DBProxyNodes ? $this->DBProxyNodes->toArray($noStream) : $this->DBProxyNodes;
        }

        if (null !== $this->DBProxyPersistentConnectionStatus) {
            $res['DBProxyPersistentConnectionStatus'] = $this->DBProxyPersistentConnectionStatus;
        }

        if (null !== $this->DBProxyServiceStatus) {
            $res['DBProxyServiceStatus'] = $this->DBProxyServiceStatus;
        }

        if (null !== $this->dbProxyEndpointItems) {
            $res['DbProxyEndpointItems'] = null !== $this->dbProxyEndpointItems ? $this->dbProxyEndpointItems->toArray($noStream) : $this->dbProxyEndpointItems;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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

        if (isset($map['DBProxyKindCode'])) {
            $model->DBProxyKindCode = $map['DBProxyKindCode'];
        }

        if (isset($map['DBProxyNodes'])) {
            $model->DBProxyNodes = DBProxyNodes::fromMap($map['DBProxyNodes']);
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
