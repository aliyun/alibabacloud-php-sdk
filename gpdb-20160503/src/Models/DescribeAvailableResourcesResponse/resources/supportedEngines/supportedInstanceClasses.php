<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponse\resources\supportedEngines;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponse\resources\supportedEngines\supportedInstanceClasses\nodeCount;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponse\resources\supportedEngines\supportedInstanceClasses\storageSize;
use AlibabaCloud\Tea\Model;

class supportedInstanceClasses extends Model
{
    /**
     * @var string
     */
    public $displayClass;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var nodeCount
     */
    public $nodeCount;

    /**
     * @var storageSize
     */
    public $storageSize;
    protected $_name = [
        'displayClass'  => 'DisplayClass',
        'instanceClass' => 'InstanceClass',
        'description'   => 'Description',
        'storageType'   => 'StorageType',
        'nodeCount'     => 'NodeCount',
        'storageSize'   => 'StorageSize',
    ];

    public function validate()
    {
        Model::validateRequired('displayClass', $this->displayClass, true);
        Model::validateRequired('instanceClass', $this->instanceClass, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('storageType', $this->storageType, true);
        Model::validateRequired('nodeCount', $this->nodeCount, true);
        Model::validateRequired('storageSize', $this->storageSize, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayClass) {
            $res['DisplayClass'] = $this->displayClass;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = null !== $this->nodeCount ? $this->nodeCount->toMap() : null;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = null !== $this->storageSize ? $this->storageSize->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedInstanceClasses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayClass'])) {
            $model->displayClass = $map['DisplayClass'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = nodeCount::fromMap($map['NodeCount']);
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = storageSize::fromMap($map['StorageSize']);
        }

        return $model;
    }
}
