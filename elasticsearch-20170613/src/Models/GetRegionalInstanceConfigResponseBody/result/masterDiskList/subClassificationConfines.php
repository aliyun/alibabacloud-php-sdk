<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionalInstanceConfigResponseBody\result\masterDiskList;

use AlibabaCloud\Tea\Model;

class subClassificationConfines extends Model
{
    /**
     * @var int
     */
    public $maxSize;

    /**
     * @var int
     */
    public $minSize;

    /**
     * @var string
     */
    public $performanceLevel;
    protected $_name = [
        'maxSize'          => 'maxSize',
        'minSize'          => 'minSize',
        'performanceLevel' => 'performanceLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxSize) {
            $res['maxSize'] = $this->maxSize;
        }
        if (null !== $this->minSize) {
            $res['minSize'] = $this->minSize;
        }
        if (null !== $this->performanceLevel) {
            $res['performanceLevel'] = $this->performanceLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subClassificationConfines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maxSize'])) {
            $model->maxSize = $map['maxSize'];
        }
        if (isset($map['minSize'])) {
            $model->minSize = $map['minSize'];
        }
        if (isset($map['performanceLevel'])) {
            $model->performanceLevel = $map['performanceLevel'];
        }

        return $model;
    }
}
