<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardResponseBody\standardInfo\attributeWithValueList\attribute\valueConfig\valueRange;

use AlibabaCloud\Dara\Model;

class minMaxValueConfig extends Model
{
    /**
     * @var bool
     */
    public $includeMaxValue;

    /**
     * @var bool
     */
    public $includeMinValue;

    /**
     * @var string
     */
    public $maxValue;

    /**
     * @var string
     */
    public $minValue;
    protected $_name = [
        'includeMaxValue' => 'IncludeMaxValue',
        'includeMinValue' => 'IncludeMinValue',
        'maxValue' => 'MaxValue',
        'minValue' => 'MinValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->includeMaxValue) {
            $res['IncludeMaxValue'] = $this->includeMaxValue;
        }

        if (null !== $this->includeMinValue) {
            $res['IncludeMinValue'] = $this->includeMinValue;
        }

        if (null !== $this->maxValue) {
            $res['MaxValue'] = $this->maxValue;
        }

        if (null !== $this->minValue) {
            $res['MinValue'] = $this->minValue;
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
        if (isset($map['IncludeMaxValue'])) {
            $model->includeMaxValue = $map['IncludeMaxValue'];
        }

        if (isset($map['IncludeMinValue'])) {
            $model->includeMinValue = $map['IncludeMinValue'];
        }

        if (isset($map['MaxValue'])) {
            $model->maxValue = $map['MaxValue'];
        }

        if (isset($map['MinValue'])) {
            $model->minValue = $map['MinValue'];
        }

        return $model;
    }
}
