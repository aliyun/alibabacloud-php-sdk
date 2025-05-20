<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateLindormV2InstanceRequest\engineList;

use AlibabaCloud\Dara\Model;

class nodeGroupList extends Model
{
    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var int
     */
    public $nodeDiskSize;

    /**
     * @var string
     */
    public $nodeDiskType;

    /**
     * @var string
     */
    public $nodeSpec;

    /**
     * @var string
     */
    public $resourceGroupName;
    protected $_name = [
        'nodeCount' => 'NodeCount',
        'nodeDiskSize' => 'NodeDiskSize',
        'nodeDiskType' => 'NodeDiskType',
        'nodeSpec' => 'NodeSpec',
        'resourceGroupName' => 'ResourceGroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }

        if (null !== $this->nodeDiskSize) {
            $res['NodeDiskSize'] = $this->nodeDiskSize;
        }

        if (null !== $this->nodeDiskType) {
            $res['NodeDiskType'] = $this->nodeDiskType;
        }

        if (null !== $this->nodeSpec) {
            $res['NodeSpec'] = $this->nodeSpec;
        }

        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }

        if (isset($map['NodeDiskSize'])) {
            $model->nodeDiskSize = $map['NodeDiskSize'];
        }

        if (isset($map['NodeDiskType'])) {
            $model->nodeDiskType = $map['NodeDiskType'];
        }

        if (isset($map['NodeSpec'])) {
            $model->nodeSpec = $map['NodeSpec'];
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        return $model;
    }
}
