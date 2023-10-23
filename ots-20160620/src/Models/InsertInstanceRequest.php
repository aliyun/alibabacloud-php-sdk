<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ots\V20160620\Models;

use AlibabaCloud\SDK\Ots\V20160620\Models\InsertInstanceRequest\tagInfo;
use AlibabaCloud\Tea\Model;

class InsertInstanceRequest extends Model
{
    /**
     * @example HYBRID
     *
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $description;

    /**
     * @example rec-ots-demo-002
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example VPC_CONSOLE
     *
     * @var string
     */
    public $network;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var tagInfo[]
     */
    public $tagInfo;
    protected $_name = [
        'clusterType'     => 'ClusterType',
        'description'     => 'Description',
        'instanceName'    => 'InstanceName',
        'network'         => 'Network',
        'resourceOwnerId' => 'ResourceOwnerId',
        'tagInfo'         => 'TagInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->tagInfo) {
            $res['TagInfo'] = [];
            if (null !== $this->tagInfo && \is_array($this->tagInfo)) {
                $n = 0;
                foreach ($this->tagInfo as $item) {
                    $res['TagInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TagInfo'])) {
            if (!empty($map['TagInfo'])) {
                $model->tagInfo = [];
                $n              = 0;
                foreach ($map['TagInfo'] as $item) {
                    $model->tagInfo[$n++] = null !== $item ? tagInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
