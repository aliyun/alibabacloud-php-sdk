<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponseBody\resources\supportedEngines;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponseBody\resources\supportedEngines\supportedInstanceClasses\nodeCount;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponseBody\resources\supportedEngines\supportedInstanceClasses\storageSize;

class supportedInstanceClasses extends Model
{
    /**
     * @var string
     */
    public $category;

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
        'category' => 'Category',
        'description' => 'Description',
        'displayClass' => 'DisplayClass',
        'instanceClass' => 'InstanceClass',
        'nodeCount' => 'NodeCount',
        'storageSize' => 'StorageSize',
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
        if (null !== $this->nodeCount) {
            $this->nodeCount->validate();
        }
        if (null !== $this->storageSize) {
            $this->storageSize->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

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
            $res['NodeCount'] = null !== $this->nodeCount ? $this->nodeCount->toArray($noStream) : $this->nodeCount;
        }

        if (null !== $this->storageSize) {
            $res['StorageSize'] = null !== $this->storageSize ? $this->storageSize->toArray($noStream) : $this->storageSize;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

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
