<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class DeleteInstanceVpcEndpointLinkedVpcRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example cri-xkx6vujuhay0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the module that you want to access. Valid values:
     *
     *   `Registry`: the image repository.
     *   `Chart`: a Helm chart.
     *
     * @example Chart
     *
     * @var string
     */
    public $moduleName;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-uf6pa68zxnnlc48dd****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vpc-uf6pa68zxnnlc48dd****
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'moduleName' => 'ModuleName',
        'vpcId'      => 'VpcId',
        'vswitchId'  => 'VswitchId',
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
     * @return DeleteInstanceVpcEndpointLinkedVpcRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
