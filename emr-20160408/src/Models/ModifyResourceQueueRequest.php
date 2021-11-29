<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyResourceQueueRequest\config;
use AlibabaCloud\Tea\Model;

class ModifyResourceQueueRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var config[]
     */
    public $config;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $leaf;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $parentQueueId;

    /**
     * @var string
     */
    public $qualifiedName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $resourcePoolId;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'config'          => 'Config',
        'id'              => 'Id',
        'leaf'            => 'Leaf',
        'name'            => 'Name',
        'parentQueueId'   => 'ParentQueueId',
        'qualifiedName'   => 'QualifiedName',
        'regionId'        => 'RegionId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourcePoolId'  => 'ResourcePoolId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->config) {
            $res['Config'] = [];
            if (null !== $this->config && \is_array($this->config)) {
                $n = 0;
                foreach ($this->config as $item) {
                    $res['Config'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->leaf) {
            $res['Leaf'] = $this->leaf;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentQueueId) {
            $res['ParentQueueId'] = $this->parentQueueId;
        }
        if (null !== $this->qualifiedName) {
            $res['QualifiedName'] = $this->qualifiedName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourcePoolId) {
            $res['ResourcePoolId'] = $this->resourcePoolId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyResourceQueueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Config'])) {
            if (!empty($map['Config'])) {
                $model->config = [];
                $n             = 0;
                foreach ($map['Config'] as $item) {
                    $model->config[$n++] = null !== $item ? config::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Leaf'])) {
            $model->leaf = $map['Leaf'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentQueueId'])) {
            $model->parentQueueId = $map['ParentQueueId'];
        }
        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourcePoolId'])) {
            $model->resourcePoolId = $map['ResourcePoolId'];
        }

        return $model;
    }
}
