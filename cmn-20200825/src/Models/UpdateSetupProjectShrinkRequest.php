<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class UpdateSetupProjectShrinkRequest extends Model
{
    /**
     * @description 架构id
     *
     * @example archIdxxxyyy
     *
     * @var string
     */
    public $architectureId;

    /**
     * @description 预计交付时间
     *
     * @example 2021-03-27 00:00:00
     *
     * @var string
     */
    public $deliveryTime;

    /**
     * @description 描述
     *
     * @example 建设交付项目
     *
     * @var string
     */
    public $description;

    /**
     * @example instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 节点
     *
     * @example []
     *
     * @var string
     */
    public $nodes;

    /**
     * @description 套餐
     *
     * @var string
     */
    public $packagesShrink;

    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @example setupProjectIdxxxyyy
     *
     * @var string
     */
    public $setupProjectId;

    /**
     * @description 物理空间uId
     *
     * @example spaceIdxxxyyy
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'architectureId' => 'ArchitectureId',
        'deliveryTime'   => 'DeliveryTime',
        'description'    => 'Description',
        'instanceId'     => 'InstanceId',
        'nodes'          => 'Nodes',
        'packagesShrink' => 'Packages',
        'setupProjectId' => 'SetupProjectId',
        'spaceId'        => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architectureId) {
            $res['ArchitectureId'] = $this->architectureId;
        }
        if (null !== $this->deliveryTime) {
            $res['DeliveryTime'] = $this->deliveryTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = $this->nodes;
        }
        if (null !== $this->packagesShrink) {
            $res['Packages'] = $this->packagesShrink;
        }
        if (null !== $this->setupProjectId) {
            $res['SetupProjectId'] = $this->setupProjectId;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSetupProjectShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchitectureId'])) {
            $model->architectureId = $map['ArchitectureId'];
        }
        if (isset($map['DeliveryTime'])) {
            $model->deliveryTime = $map['DeliveryTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Nodes'])) {
            $model->nodes = $map['Nodes'];
        }
        if (isset($map['Packages'])) {
            $model->packagesShrink = $map['Packages'];
        }
        if (isset($map['SetupProjectId'])) {
            $model->setupProjectId = $map['SetupProjectId'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
