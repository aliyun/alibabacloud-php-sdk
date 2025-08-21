<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionalInstanceConfigResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionalInstanceConfigResponseBody\result\warmNodeDiskList\subClassificationConfines;

class warmNodeDiskList extends Model
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

    /**
     * @var int[]
     */
    public $valueLimitSet;
    protected $_name = [
        'diskType' => 'diskType',
        'maxSize' => 'maxSize',
        'minSize' => 'minSize',
        'scaleLimit' => 'scaleLimit',
        'subClassificationConfines' => 'subClassificationConfines',
        'valueLimitSet' => 'valueLimitSet',
    ];

    public function validate()
    {
        if (\is_array($this->subClassificationConfines)) {
            Model::validateArray($this->subClassificationConfines);
        }
        if (\is_array($this->valueLimitSet)) {
            Model::validateArray($this->valueLimitSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->subClassificationConfines)) {
                $res['subClassificationConfines'] = [];
                $n1 = 0;
                foreach ($this->subClassificationConfines as $item1) {
                    $res['subClassificationConfines'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->valueLimitSet) {
            if (\is_array($this->valueLimitSet)) {
                $res['valueLimitSet'] = [];
                $n1 = 0;
                foreach ($this->valueLimitSet as $item1) {
                    $res['valueLimitSet'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['subClassificationConfines'] as $item1) {
                    $model->subClassificationConfines[$n1] = subClassificationConfines::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['valueLimitSet'])) {
            if (!empty($map['valueLimitSet'])) {
                $model->valueLimitSet = [];
                $n1 = 0;
                foreach ($map['valueLimitSet'] as $item1) {
                    $model->valueLimitSet[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
