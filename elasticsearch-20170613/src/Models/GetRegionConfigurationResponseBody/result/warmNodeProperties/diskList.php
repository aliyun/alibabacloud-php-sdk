<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result\warmNodeProperties;

use AlibabaCloud\Dara\Model;

class diskList extends Model
{
    /**
     * @var bool
     */
    public $diskEncryption;

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
     * @var string[]
     */
    public $valueLimitSet;
    protected $_name = [
        'diskEncryption' => 'diskEncryption',
        'diskType' => 'diskType',
        'maxSize' => 'maxSize',
        'minSize' => 'minSize',
        'scaleLimit' => 'scaleLimit',
        'valueLimitSet' => 'valueLimitSet',
    ];

    public function validate()
    {
        if (\is_array($this->valueLimitSet)) {
            Model::validateArray($this->valueLimitSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskEncryption) {
            $res['diskEncryption'] = $this->diskEncryption;
        }

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

        if (null !== $this->valueLimitSet) {
            if (\is_array($this->valueLimitSet)) {
                $res['valueLimitSet'] = [];
                $n1 = 0;
                foreach ($this->valueLimitSet as $item1) {
                    $res['valueLimitSet'][$n1++] = $item1;
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
        if (isset($map['diskEncryption'])) {
            $model->diskEncryption = $map['diskEncryption'];
        }

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

        if (isset($map['valueLimitSet'])) {
            if (!empty($map['valueLimitSet'])) {
                $model->valueLimitSet = [];
                $n1 = 0;
                foreach ($map['valueLimitSet'] as $item1) {
                    $model->valueLimitSet[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
