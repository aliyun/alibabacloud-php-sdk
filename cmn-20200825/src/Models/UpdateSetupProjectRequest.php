<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateSetupProjectRequest\packages;
use AlibabaCloud\Tea\Model;

class UpdateSetupProjectRequest extends Model
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
     * @var packages[]
     */
    public $packages;

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
        'packages'       => 'Packages',
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
        if (null !== $this->packages) {
            $res['Packages'] = [];
            if (null !== $this->packages && \is_array($this->packages)) {
                $n = 0;
                foreach ($this->packages as $item) {
                    $res['Packages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return UpdateSetupProjectRequest
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
            if (!empty($map['Packages'])) {
                $model->packages = [];
                $n               = 0;
                foreach ($map['Packages'] as $item) {
                    $model->packages[$n++] = null !== $item ? packages::fromMap($item) : $item;
                }
            }
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
