<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeEIURangeResponseBody;

use AlibabaCloud\Tea\Model;

class EIUInfo extends Model
{
    /**
     * @description The suggested value for the number of EIUs.
     *
     * @example 2
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @description The queried range for the number of EIUs.
     *
     * @var int[]
     */
    public $EIURange;

    /**
     * @description A reserved parameter.
     *
     * @example none
     *
     * @var string
     */
    public $maxValue;

    /**
     * @description A reserved parameter.
     *
     * @example none
     *
     * @var string
     */
    public $minValue;

    /**
     * @description A reserved parameter.
     *
     * @example none
     *
     * @var string
     */
    public $step;

    /**
     * @description A reserved parameter.
     *
     * @var string[]
     */
    public $storageResourceRange;
    protected $_name = [
        'defaultValue'         => 'DefaultValue',
        'EIURange'             => 'EIURange',
        'maxValue'             => 'MaxValue',
        'minValue'             => 'MinValue',
        'step'                 => 'Step',
        'storageResourceRange' => 'StorageResourceRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->EIURange) {
            $res['EIURange'] = $this->EIURange;
        }
        if (null !== $this->maxValue) {
            $res['MaxValue'] = $this->maxValue;
        }
        if (null !== $this->minValue) {
            $res['MinValue'] = $this->minValue;
        }
        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }
        if (null !== $this->storageResourceRange) {
            $res['StorageResourceRange'] = $this->storageResourceRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EIUInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['EIURange'])) {
            if (!empty($map['EIURange'])) {
                $model->EIURange = $map['EIURange'];
            }
        }
        if (isset($map['MaxValue'])) {
            $model->maxValue = $map['MaxValue'];
        }
        if (isset($map['MinValue'])) {
            $model->minValue = $map['MinValue'];
        }
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }
        if (isset($map['StorageResourceRange'])) {
            if (!empty($map['StorageResourceRange'])) {
                $model->storageResourceRange = $map['StorageResourceRange'];
            }
        }

        return $model;
    }
}
