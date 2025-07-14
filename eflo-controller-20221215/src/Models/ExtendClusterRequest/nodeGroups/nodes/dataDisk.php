<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\nodeGroups\nodes;

use AlibabaCloud\Tea\Model;

class dataDisk extends Model
{
    /**
     * @description Type
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $category;

    /**
     * @description Whether the data disk is deleted with the node
     *
     * @example true
     *
     * @var bool
     */
    public $deleteWithNode;

    /**
     * @description Data Disk Performance Level
     *
     * @example PL0
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description Disk Size
     *
     * @example 80
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'category' => 'Category',
        'deleteWithNode' => 'DeleteWithNode',
        'performanceLevel' => 'PerformanceLevel',
        'size' => 'Size',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->deleteWithNode) {
            $res['DeleteWithNode'] = $this->deleteWithNode;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDisk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DeleteWithNode'])) {
            $model->deleteWithNode = $map['DeleteWithNode'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
