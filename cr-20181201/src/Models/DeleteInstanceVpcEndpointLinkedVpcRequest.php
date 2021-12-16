<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class DeleteInstanceVpcEndpointLinkedVpcRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'moduleName' => 'ModuleName',
        'regionId'   => 'RegionId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
