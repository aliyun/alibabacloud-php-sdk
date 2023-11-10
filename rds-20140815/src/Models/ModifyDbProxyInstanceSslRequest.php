<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDbProxyInstanceSslRequest extends Model
{
    /**
     * @description A reserved parameter. You do not need to specify this parameter.
     *
     * @example normal
     *
     * @var string
     */
    public $DBProxyEngineType;

    /**
     * @description The instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * @example rm-t4n3axxxxx
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @description The dedicated proxy endpoint of the instance.
     *
     * @example test123456.rwlb.rds.aliyuncs.com
     *
     * @var string
     */
    public $dbProxyConnectString;

    /**
     * @description The ID of the proxy endpoint. You can call the DescribeDBProxyEndpoint operation to query the ID of the proxy endpoint.
     *
     * @example ta9um4xxxxx
     *
     * @var string
     */
    public $dbProxyEndpointId;

    /**
     * @description The SSL configuration setting that you want to apply on the instance. Valid values:
     *
     *   0: disables SSL encryption.
     *   1: enables SSL encryption or modifies the endpoint that requires SSL encryption.
     *   2: updates the validity period of the SSL certificate.
     *
     * > This setting causes your instance to restart. Proceed with caution.
     * @example 1
     *
     * @var string
     */
    public $dbProxySslEnabled;

    /**
     * @description The region ID. You can call the DescribeRegions operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBProxyEngineType'    => 'DBProxyEngineType',
        'dbInstanceId'         => 'DbInstanceId',
        'dbProxyConnectString' => 'DbProxyConnectString',
        'dbProxyEndpointId'    => 'DbProxyEndpointId',
        'dbProxySslEnabled'    => 'DbProxySslEnabled',
        'regionId'             => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBProxyEngineType) {
            $res['DBProxyEngineType'] = $this->DBProxyEngineType;
        }
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->dbProxyConnectString) {
            $res['DbProxyConnectString'] = $this->dbProxyConnectString;
        }
        if (null !== $this->dbProxyEndpointId) {
            $res['DbProxyEndpointId'] = $this->dbProxyEndpointId;
        }
        if (null !== $this->dbProxySslEnabled) {
            $res['DbProxySslEnabled'] = $this->dbProxySslEnabled;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDbProxyInstanceSslRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBProxyEngineType'])) {
            $model->DBProxyEngineType = $map['DBProxyEngineType'];
        }
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['DbProxyConnectString'])) {
            $model->dbProxyConnectString = $map['DbProxyConnectString'];
        }
        if (isset($map['DbProxyEndpointId'])) {
            $model->dbProxyEndpointId = $map['DbProxyEndpointId'];
        }
        if (isset($map['DbProxySslEnabled'])) {
            $model->dbProxySslEnabled = $map['DbProxySslEnabled'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
