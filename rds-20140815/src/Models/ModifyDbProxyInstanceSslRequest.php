<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDbProxyInstanceSslRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $dbInstanceId;

    /**
     * @var string
     */
    public $dbProxyEndpointId;

    /**
     * @var string
     */
    public $dbProxyConnectString;

    /**
     * @var string
     */
    public $dbProxySslEnabled;
    protected $_name = [
        'regionId'             => 'RegionId',
        'dbInstanceId'         => 'DbInstanceId',
        'dbProxyEndpointId'    => 'DbProxyEndpointId',
        'dbProxyConnectString' => 'DbProxyConnectString',
        'dbProxySslEnabled'    => 'DbProxySslEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->dbProxyEndpointId) {
            $res['DbProxyEndpointId'] = $this->dbProxyEndpointId;
        }
        if (null !== $this->dbProxyConnectString) {
            $res['DbProxyConnectString'] = $this->dbProxyConnectString;
        }
        if (null !== $this->dbProxySslEnabled) {
            $res['DbProxySslEnabled'] = $this->dbProxySslEnabled;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['DbProxyEndpointId'])) {
            $model->dbProxyEndpointId = $map['DbProxyEndpointId'];
        }
        if (isset($map['DbProxyConnectString'])) {
            $model->dbProxyConnectString = $map['DbProxyConnectString'];
        }
        if (isset($map['DbProxySslEnabled'])) {
            $model->dbProxySslEnabled = $map['DbProxySslEnabled'];
        }

        return $model;
    }
}
