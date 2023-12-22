<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceVpcEndpointLinkedVpcRequest extends Model
{
    /**
     * @description Specifies whether to automatically create Alibaba Cloud DNS PrivateZone records. Valid values:
     *
     * >  If you enable automatic creation of PrivateZone records, a PrivateZone record is automatically created when you associate a VPC with the instance.
     *
     *   `true`
     *   `false`
     *
     * @example false
     *
     * @var bool
     */
    public $enableCreateDNSRecordInPvzt;

    /**
     * @description The instance ID.
     *
     * @example cri-xkx6vujuhay0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the module that you want to access. Valid values:
     *
     *   `Registry`: image repositories.
     *   `Chart`: Helm charts.
     *
     * @example Registry
     *
     * @var string
     */
    public $moduleName;

    /**
     * @description The VPC ID.
     *
     * @example vpc-uf6pa68zxnnlc48dd****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the vSwitch that is associated with the specified VPC.
     *
     * @example vsw-uf6u0kn8x2gbzxfn2****
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'enableCreateDNSRecordInPvzt' => 'EnableCreateDNSRecordInPvzt',
        'instanceId'                  => 'InstanceId',
        'moduleName'                  => 'ModuleName',
        'vpcId'                       => 'VpcId',
        'vswitchId'                   => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableCreateDNSRecordInPvzt) {
            $res['EnableCreateDNSRecordInPvzt'] = $this->enableCreateDNSRecordInPvzt;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceVpcEndpointLinkedVpcRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableCreateDNSRecordInPvzt'])) {
            $model->enableCreateDNSRecordInPvzt = $map['EnableCreateDNSRecordInPvzt'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
