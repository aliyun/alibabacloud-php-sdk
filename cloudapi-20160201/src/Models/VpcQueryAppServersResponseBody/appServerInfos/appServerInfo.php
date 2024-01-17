<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models\VpcQueryAppServersResponseBody\appServerInfos;

use AlibabaCloud\Tea\Model;

class appServerInfo extends Model
{
    /**
     * @var string
     */
    public $addressPoolId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $serverIp;

    /**
     * @var string
     */
    public $serverMappingIp;

    /**
     * @var string
     */
    public $serverType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'addressPoolId'   => 'AddressPoolId',
        'appId'           => 'AppId',
        'serverIp'        => 'ServerIp',
        'serverMappingIp' => 'ServerMappingIp',
        'serverType'      => 'ServerType',
        'status'          => 'Status',
        'vpcId'           => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressPoolId) {
            $res['AddressPoolId'] = $this->addressPoolId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }
        if (null !== $this->serverMappingIp) {
            $res['ServerMappingIp'] = $this->serverMappingIp;
        }
        if (null !== $this->serverType) {
            $res['ServerType'] = $this->serverType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appServerInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressPoolId'])) {
            $model->addressPoolId = $map['AddressPoolId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }
        if (isset($map['ServerMappingIp'])) {
            $model->serverMappingIp = $map['ServerMappingIp'];
        }
        if (isset($map['ServerType'])) {
            $model->serverType = $map['ServerType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
