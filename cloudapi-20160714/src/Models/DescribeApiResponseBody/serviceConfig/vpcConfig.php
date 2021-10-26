<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\serviceConfig;

use AlibabaCloud\Tea\Model;

class vpcConfig extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcScheme;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'vpcId'      => 'VpcId',
        'vpcScheme'  => 'VpcScheme',
        'instanceId' => 'InstanceId',
        'port'       => 'Port',
        'name'       => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcScheme) {
            $res['VpcScheme'] = $this->vpcScheme;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcScheme'])) {
            $model->vpcScheme = $map['VpcScheme'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
