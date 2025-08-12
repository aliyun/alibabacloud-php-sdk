<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\AddCasterLayoutRequest;

use AlibabaCloud\Dara\Model;

class videoLayer extends Model
{
    /**
     * @var string
     */
    public $fillMode;

    /**
     * @var int
     */
    public $fixedDelayDuration;

    /**
     * @var float
     */
    public $heightNormalized;

    /**
     * @var float[]
     */
    public $positionNormalized;

    /**
     * @var string
     */
    public $positionRefer;

    /**
     * @var float
     */
    public $widthNormalized;
    protected $_name = [
        'fillMode' => 'FillMode',
        'fixedDelayDuration' => 'FixedDelayDuration',
        'heightNormalized' => 'HeightNormalized',
        'positionNormalized' => 'PositionNormalized',
        'positionRefer' => 'PositionRefer',
        'widthNormalized' => 'WidthNormalized',
    ];

    public function validate()
    {
        if (\is_array($this->positionNormalized)) {
            Model::validateArray($this->positionNormalized);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fillMode) {
            $res['FillMode'] = $this->fillMode;
        }

        if (null !== $this->fixedDelayDuration) {
            $res['FixedDelayDuration'] = $this->fixedDelayDuration;
        }

        if (null !== $this->heightNormalized) {
            $res['HeightNormalized'] = $this->heightNormalized;
        }

        if (null !== $this->positionNormalized) {
            if (\is_array($this->positionNormalized)) {
                $res['PositionNormalized'] = [];
                $n1 = 0;
                foreach ($this->positionNormalized as $item1) {
                    $res['PositionNormalized'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->positionRefer) {
            $res['PositionRefer'] = $this->positionRefer;
        }

        if (null !== $this->widthNormalized) {
            $res['WidthNormalized'] = $this->widthNormalized;
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
        if (isset($map['FillMode'])) {
            $model->fillMode = $map['FillMode'];
        }

        if (isset($map['FixedDelayDuration'])) {
            $model->fixedDelayDuration = $map['FixedDelayDuration'];
        }

        if (isset($map['HeightNormalized'])) {
            $model->heightNormalized = $map['HeightNormalized'];
        }

        if (isset($map['PositionNormalized'])) {
            if (!empty($map['PositionNormalized'])) {
                $model->positionNormalized = [];
                $n1 = 0;
                foreach ($map['PositionNormalized'] as $item1) {
                    $model->positionNormalized[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PositionRefer'])) {
            $model->positionRefer = $map['PositionRefer'];
        }

        if (isset($map['WidthNormalized'])) {
            $model->widthNormalized = $map['WidthNormalized'];
        }

        return $model;
    }
}
