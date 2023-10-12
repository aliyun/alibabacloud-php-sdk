<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\SetupProject\packages;
use AlibabaCloud\Tea\Model;

class SetupProject extends Model
{
    /**
     * @example xxxyyy
     *
     * @var string
     */
    public $archId;

    /**
     * @example 5.0
     *
     * @var string
     */
    public $archVersion;

    /**
     * @example archId
     *
     * @var string
     */
    public $architectureId;

    /**
     * @example 2020-02-01
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2021-03-27 00:00:00
     *
     * @var string
     */
    public $deliveryTime;

    /**
     * @example 建设交付项目
     *
     * @var string
     */
    public $description;

    /**
     * @example []
     *
     * @var string
     */
    public $nodes;

    /**
     * @var packages[]
     */
    public $packages;

    /**
     * @example xxxyyy
     *
     * @var string
     */
    public $setupProjectId;

    /**
     * @example Project
     *
     * @var string
     */
    public $setupProjectName;

    /**
     * @example xxxyyy
     *
     * @var string
     */
    public $spaceId;

    /**
     * @example 大型园区
     *
     * @var string
     */
    public $spaceName;

    /**
     * @example 园区
     *
     * @var string
     */
    public $spaceType;

    /**
     * @example USED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'archId'           => 'ArchId',
        'archVersion'      => 'ArchVersion',
        'architectureId'   => 'ArchitectureId',
        'createTime'       => 'CreateTime',
        'deliveryTime'     => 'DeliveryTime',
        'description'      => 'Description',
        'nodes'            => 'Nodes',
        'packages'         => 'Packages',
        'setupProjectId'   => 'SetupProjectId',
        'setupProjectName' => 'SetupProjectName',
        'spaceId'          => 'SpaceId',
        'spaceName'        => 'SpaceName',
        'spaceType'        => 'SpaceType',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archId) {
            $res['ArchId'] = $this->archId;
        }
        if (null !== $this->archVersion) {
            $res['ArchVersion'] = $this->archVersion;
        }
        if (null !== $this->architectureId) {
            $res['ArchitectureId'] = $this->architectureId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deliveryTime) {
            $res['DeliveryTime'] = $this->deliveryTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->setupProjectName) {
            $res['SetupProjectName'] = $this->setupProjectName;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->spaceName) {
            $res['SpaceName'] = $this->spaceName;
        }
        if (null !== $this->spaceType) {
            $res['SpaceType'] = $this->spaceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetupProject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchId'])) {
            $model->archId = $map['ArchId'];
        }
        if (isset($map['ArchVersion'])) {
            $model->archVersion = $map['ArchVersion'];
        }
        if (isset($map['ArchitectureId'])) {
            $model->architectureId = $map['ArchitectureId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeliveryTime'])) {
            $model->deliveryTime = $map['DeliveryTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['SetupProjectName'])) {
            $model->setupProjectName = $map['SetupProjectName'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['SpaceName'])) {
            $model->spaceName = $map['SpaceName'];
        }
        if (isset($map['SpaceType'])) {
            $model->spaceType = $map['SpaceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
