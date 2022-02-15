<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponseBody\resources\supportedEngines;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponseBody\resources\supportedEngines\supportedInstanceClasses\nodeCount;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponseBody\resources\supportedEngines\supportedInstanceClasses\storageSize;
use AlibabaCloud\Tea\Model;

class supportedInstanceClasses extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayClass;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var nodeCount
     */
    public $nodeCount;

    /**
     * @var storageSize
     */
    public $storageSize;

    /**
     * @var string
     */
    public $storageType;
    protected $_name = [
        'description'   => 'Description',
        'displayClass'  => 'DisplayClass',
        'instanceClass' => 'InstanceClass',
        'nodeCount'     => 'NodeCount',
        'storageSize'   => 'StorageSize',
        'storageType'   => 'StorageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayClass) {
            $res['DisplayClass'] = $this->displayClass;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = null !== $this->nodeCount ? $this->nodeCount->toMap() : null;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = null !== $this->storageSize ? $this->storageSize->toMap() : null;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayClass'])) {
            $model->displayClass = $map['DisplayClass'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = nodeCount::fromMap($map['NodeCount']);
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = storageSize::fromMap($map['StorageSize']);
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
