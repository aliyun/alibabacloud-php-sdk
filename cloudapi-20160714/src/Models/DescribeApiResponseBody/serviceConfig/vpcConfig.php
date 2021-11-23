<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\serviceConfig;

use AlibabaCloud\Tea\Model;

class vpcConfig extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcScheme;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'name'       => 'Name',
        'port'       => 'Port',
        'vpcId'      => 'VpcId',
        'vpcScheme'  => 'VpcScheme',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcScheme) {
            $res['VpcScheme'] = $this->vpcScheme;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcScheme'])) {
            $model->vpcScheme = $map['VpcScheme'];
        }

        return $model;
    }
}
