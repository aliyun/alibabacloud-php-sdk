<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DeleteDBProxyEndpointAddressRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $DBProxyConnectStringNetType;
    /**
     * @var string
     */
    public $DBProxyEndpointId;
    /**
     * @var string
     */
    public $DBProxyEngineType;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBInstanceId'                => 'DBInstanceId',
        'DBProxyConnectStringNetType' => 'DBProxyConnectStringNetType',
        'DBProxyEndpointId'           => 'DBProxyEndpointId',
        'DBProxyEngineType'           => 'DBProxyEngineType',
        'regionId'                    => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
