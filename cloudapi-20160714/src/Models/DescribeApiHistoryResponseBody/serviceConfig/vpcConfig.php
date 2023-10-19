<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\serviceConfig;

use AlibabaCloud\Tea\Model;

class vpcConfig extends Model
{
    /**
     * @description The IDs of the ELB and SLB instances in the VPC.
     *
     * @example i-bp1h497hkijewv2***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the VPC.
     *
     * @example glmall-app-test
     *
     * @var string
     */
    public $name;

    /**
     * @description The port number that corresponds to the instance.
     *
     * @example 8080
     *
     * @var int
     */
    public $port;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-2zeafsc3fygk1***
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The VPC protocol.
     *
     * @example HTTP
     *
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
