<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponseBody\resources\supportedEngines;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponseBody\resources\supportedEngines\supportedInstanceClasses\nodeCount;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponseBody\resources\supportedEngines\supportedInstanceClasses\storageSize;
use AlibabaCloud\Tea\Model;

class supportedInstanceClasses extends Model
{
    /**
     * @description The instance edition. Valid values:
     *
     *   **HighAvailability**: High-availability Edition
     *   **Basic**: Basic Edition
     *
     * @example HighAvailability
     *
     * @var string
     */
    public $category;

    /**
     * @description The description of compute node specifications.
     *
     * @var string
     */
    public $description;

    /**
     * @description The specifications of each compute node.
     *
     * @example 2C16G
     *
     * @var string
     */
    public $displayClass;

    /**
     * @description The specifications of each compute node.
     *
     * @example 2C16G
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description Details about the compute nodes.
     *
     * @var nodeCount
     */
    public $nodeCount;

    /**
     * @description Details about the storage capacity of compute nodes.
     *
     * @var storageSize
     */
    public $storageSize;

    /**
     * @description The storage type. Valid values:
     *
     *   **cloud_essd**: enhanced SSD (ESSD)
     *   **cloud_efficiency**: ultra disk
     *   **oss**: Object Storage Service (OSS)
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $storageType;
    protected $_name = [
        'category'      => 'Category',
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
