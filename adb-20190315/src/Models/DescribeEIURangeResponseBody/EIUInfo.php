<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeEIURangeResponseBody;

use AlibabaCloud\Dara\Model;

class EIUInfo extends Model
{
    /**
     * @var string
     */
    public $defaultReservedNodeSize;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var int[]
     */
    public $EIURange;

    /**
     * @var string
     */
    public $maxValue;

    /**
     * @var string
     */
    public $minValue;

    /**
     * @var string[]
     */
    public $reservedNodeSizeRange;

    /**
     * @var string
     */
    public $step;

    /**
     * @var string[]
     */
    public $storageResourceRange;
    protected $_name = [
        'defaultReservedNodeSize' => 'DefaultReservedNodeSize',
        'defaultValue' => 'DefaultValue',
        'EIURange' => 'EIURange',
        'maxValue' => 'MaxValue',
        'minValue' => 'MinValue',
        'reservedNodeSizeRange' => 'ReservedNodeSizeRange',
        'step' => 'Step',
        'storageResourceRange' => 'StorageResourceRange',
    ];

    public function validate()
    {
        if (\is_array($this->EIURange)) {
            Model::validateArray($this->EIURange);
        }
        if (\is_array($this->reservedNodeSizeRange)) {
            Model::validateArray($this->reservedNodeSizeRange);
        }
        if (\is_array($this->storageResourceRange)) {
            Model::validateArray($this->storageResourceRange);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultReservedNodeSize) {
            $res['DefaultReservedNodeSize'] = $this->defaultReservedNodeSize;
        }

        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }

        if (null !== $this->EIURange) {
            if (\is_array($this->EIURange)) {
                $res['EIURange'] = [];
                $n1 = 0;
                foreach ($this->EIURange as $item1) {
                    $res['EIURange'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxValue) {
            $res['MaxValue'] = $this->maxValue;
        }

        if (null !== $this->minValue) {
            $res['MinValue'] = $this->minValue;
        }

        if (null !== $this->reservedNodeSizeRange) {
            if (\is_array($this->reservedNodeSizeRange)) {
                $res['ReservedNodeSizeRange'] = [];
                $n1 = 0;
                foreach ($this->reservedNodeSizeRange as $item1) {
                    $res['ReservedNodeSizeRange'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }

        if (null !== $this->storageResourceRange) {
            if (\is_array($this->storageResourceRange)) {
                $res['StorageResourceRange'] = [];
                $n1 = 0;
                foreach ($this->storageResourceRange as $item1) {
                    $res['StorageResourceRange'][$n1] = $item1;
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
        if (isset($map['DefaultReservedNodeSize'])) {
            $model->defaultReservedNodeSize = $map['DefaultReservedNodeSize'];
        }

        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        if (isset($map['EIURange'])) {
            if (!empty($map['EIURange'])) {
                $model->EIURange = [];
                $n1 = 0;
                foreach ($map['EIURange'] as $item1) {
                    $model->EIURange[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxValue'])) {
            $model->maxValue = $map['MaxValue'];
        }

        if (isset($map['MinValue'])) {
            $model->minValue = $map['MinValue'];
        }

        if (isset($map['ReservedNodeSizeRange'])) {
            if (!empty($map['ReservedNodeSizeRange'])) {
                $model->reservedNodeSizeRange = [];
                $n1 = 0;
                foreach ($map['ReservedNodeSizeRange'] as $item1) {
                    $model->reservedNodeSizeRange[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }

        if (isset($map['StorageResourceRange'])) {
            if (!empty($map['StorageResourceRange'])) {
                $model->storageResourceRange = [];
                $n1 = 0;
                foreach ($map['StorageResourceRange'] as $item1) {
                    $model->storageResourceRange[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
