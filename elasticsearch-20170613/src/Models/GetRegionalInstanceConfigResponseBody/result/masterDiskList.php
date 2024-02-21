<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionalInstanceConfigResponseBody\result;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionalInstanceConfigResponseBody\result\masterDiskList\subClassificationConfines;
use AlibabaCloud\Tea\Model;

class masterDiskList extends Model
{
    /**
     * @var string
     */
    public $diskType;

    /**
     * @var int
     */
    public $maxSize;

    /**
     * @var int
     */
    public $minSize;

    /**
     * @var int
     */
    public $scaleLimit;

    /**
     * @var subClassificationConfines[]
     */
    public $subClassificationConfines;
    protected $_name = [
        'diskType'                  => 'diskType',
        'maxSize'                   => 'maxSize',
        'minSize'                   => 'minSize',
        'scaleLimit'                => 'scaleLimit',
        'subClassificationConfines' => 'subClassificationConfines',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskType) {
            $res['diskType'] = $this->diskType;
        }
        if (null !== $this->maxSize) {
            $res['maxSize'] = $this->maxSize;
        }
        if (null !== $this->minSize) {
            $res['minSize'] = $this->minSize;
        }
        if (null !== $this->scaleLimit) {
            $res['scaleLimit'] = $this->scaleLimit;
        }
        if (null !== $this->subClassificationConfines) {
            $res['subClassificationConfines'] = [];
            if (null !== $this->subClassificationConfines && \is_array($this->subClassificationConfines)) {
                $n = 0;
                foreach ($this->subClassificationConfines as $item) {
                    $res['subClassificationConfines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return masterDiskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['diskType'])) {
            $model->diskType = $map['diskType'];
        }
        if (isset($map['maxSize'])) {
            $model->maxSize = $map['maxSize'];
        }
        if (isset($map['minSize'])) {
            $model->minSize = $map['minSize'];
        }
        if (isset($map['scaleLimit'])) {
            $model->scaleLimit = $map['scaleLimit'];
        }
        if (isset($map['subClassificationConfines'])) {
            if (!empty($map['subClassificationConfines'])) {
                $model->subClassificationConfines = [];
                $n                                = 0;
                foreach ($map['subClassificationConfines'] as $item) {
                    $model->subClassificationConfines[$n++] = null !== $item ? subClassificationConfines::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
