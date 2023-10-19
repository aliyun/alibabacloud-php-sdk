<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig;

use AlibabaCloud\Tea\Model;

class vpcConfig extends Model
{
    /**
     * @description The ID of the Elastic Compute Service (ECS) or Server Load Balancer (SLB) instance in the VPC.
     *
     * @example i-uf6iaale3gfef9t9cb41
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the VPC Configuration.
     *
     * @example dypls-cn-beijing-slb-pre
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
     * @description The ID of the VPC access authorization.
     *
     * @example 2zej3ehuzg9m77kvwnfpn
     *
     * @var string
     */
    public $vpcAccessId;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-wz9v96hqi6d14744sxqmx
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description http/https
     *
     * @example http
     *
     * @var string
     */
    public $vpcScheme;

    /**
     * @description The host of the backend service.
     *
     * @var string
     */
    public $vpcTargetHostName;
    protected $_name = [
        'instanceId'        => 'InstanceId',
        'name'              => 'Name',
        'port'              => 'Port',
        'vpcAccessId'       => 'VpcAccessId',
        'vpcId'             => 'VpcId',
        'vpcScheme'         => 'VpcScheme',
        'vpcTargetHostName' => 'VpcTargetHostName',
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
        if (null !== $this->vpcAccessId) {
            $res['VpcAccessId'] = $this->vpcAccessId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcScheme) {
            $res['VpcScheme'] = $this->vpcScheme;
        }
        if (null !== $this->vpcTargetHostName) {
            $res['VpcTargetHostName'] = $this->vpcTargetHostName;
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
        if (isset($map['VpcAccessId'])) {
            $model->vpcAccessId = $map['VpcAccessId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcScheme'])) {
            $model->vpcScheme = $map['VpcScheme'];
        }
        if (isset($map['VpcTargetHostName'])) {
            $model->vpcTargetHostName = $map['VpcTargetHostName'];
        }

        return $model;
    }
}
