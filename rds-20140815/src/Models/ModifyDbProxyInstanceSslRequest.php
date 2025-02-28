<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ModifyDbProxyInstanceSslRequest extends Model
{
    /**
     * @var string
     */
    public $DBProxyEngineType;
    /**
     * @var string
     */
    public $dbInstanceId;
    /**
     * @var string
     */
    public $dbProxyConnectString;
    /**
     * @var string
     */
    public $dbProxyEndpointId;
    /**
     * @var string
     */
    public $dbProxySslEnabled;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
