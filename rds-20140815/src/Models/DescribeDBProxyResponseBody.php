<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody\DBProxyConnectStringItems;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody\dbProxyEndpointItems;
use AlibabaCloud\Tea\Model;

class DescribeDBProxyResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBProxyInstanceLatestMinorVersion;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $DBProxyInstanceCurrentMinorVersion;

    /**
     * @var int
     */
    public $DBProxyInstanceNum;

    /**
     * @var string
     */
    public $DBProxyInstanceType;

    /**
     * @var string
     */
    public $DBProxyInstanceStatus;

    /**
     * @var string
     */
    public $DBProxyServiceStatus;

    /**
     * @var string
     */
    public $DBProxyInstanceName;

    /**
     * @var DBProxyConnectStringItems
     */
    public $DBProxyConnectStringItems;

    /**
     * @var dbProxyEndpointItems
     */
    public $dbProxyEndpointItems;
    protected $_name = [
        'DBProxyInstanceLatestMinorVersion'  => 'DBProxyInstanceLatestMinorVersion',
        'requestId'                          => 'RequestId',
        'DBProxyInstanceCurrentMinorVersion' => 'DBProxyInstanceCurrentMinorVersion',
        'DBProxyInstanceNum'                 => 'DBProxyInstanceNum',
        'DBProxyInstanceType'                => 'DBProxyInstanceType',
        'DBProxyInstanceStatus'              => 'DBProxyInstanceStatus',
        'DBProxyServiceStatus'               => 'DBProxyServiceStatus',
        'DBProxyInstanceName'                => 'DBProxyInstanceName',
        'DBProxyConnectStringItems'          => 'DBProxyConnectStringItems',
        'dbProxyEndpointItems'               => 'DbProxyEndpointItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBProxyInstanceLatestMinorVersion) {
            $res['DBProxyInstanceLatestMinorVersion'] = $this->DBProxyInstanceLatestMinorVersion;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBProxyInstanceCurrentMinorVersion) {
            $res['DBProxyInstanceCurrentMinorVersion'] = $this->DBProxyInstanceCurrentMinorVersion;
        }
        if (null !== $this->DBProxyInstanceNum) {
            $res['DBProxyInstanceNum'] = $this->DBProxyInstanceNum;
        }
        if (null !== $this->DBProxyInstanceType) {
            $res['DBProxyInstanceType'] = $this->DBProxyInstanceType;
        }
        if (null !== $this->DBProxyInstanceStatus) {
            $res['DBProxyInstanceStatus'] = $this->DBProxyInstanceStatus;
        }
        if (null !== $this->DBProxyServiceStatus) {
            $res['DBProxyServiceStatus'] = $this->DBProxyServiceStatus;
        }
        if (null !== $this->DBProxyInstanceName) {
            $res['DBProxyInstanceName'] = $this->DBProxyInstanceName;
        }
        if (null !== $this->DBProxyConnectStringItems) {
            $res['DBProxyConnectStringItems'] = null !== $this->DBProxyConnectStringItems ? $this->DBProxyConnectStringItems->toMap() : null;
        }
        if (null !== $this->dbProxyEndpointItems) {
            $res['DbProxyEndpointItems'] = null !== $this->dbProxyEndpointItems ? $this->dbProxyEndpointItems->toMap() : null;
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
        if (isset($map['DBProxyInstanceLatestMinorVersion'])) {
            $model->DBProxyInstanceLatestMinorVersion = $map['DBProxyInstanceLatestMinorVersion'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBProxyInstanceCurrentMinorVersion'])) {
            $model->DBProxyInstanceCurrentMinorVersion = $map['DBProxyInstanceCurrentMinorVersion'];
        }
        if (isset($map['DBProxyInstanceNum'])) {
            $model->DBProxyInstanceNum = $map['DBProxyInstanceNum'];
        }
        if (isset($map['DBProxyInstanceType'])) {
            $model->DBProxyInstanceType = $map['DBProxyInstanceType'];
        }
        if (isset($map['DBProxyInstanceStatus'])) {
            $model->DBProxyInstanceStatus = $map['DBProxyInstanceStatus'];
        }
        if (isset($map['DBProxyServiceStatus'])) {
            $model->DBProxyServiceStatus = $map['DBProxyServiceStatus'];
        }
        if (isset($map['DBProxyInstanceName'])) {
            $model->DBProxyInstanceName = $map['DBProxyInstanceName'];
        }
        if (isset($map['DBProxyConnectStringItems'])) {
            $model->DBProxyConnectStringItems = DBProxyConnectStringItems::fromMap($map['DBProxyConnectStringItems']);
        }
        if (isset($map['DbProxyEndpointItems'])) {
            $model->dbProxyEndpointItems = dbProxyEndpointItems::fromMap($map['DbProxyEndpointItems']);
        }

        return $model;
    }
}
