<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponseBody\layouts\layout\videoLayers;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponseBody\layouts\layout\videoLayers\videoLayer\positionNormalizeds;

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
     * @var positionNormalizeds
     */
    public $positionNormalizeds;

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
        'positionNormalizeds' => 'PositionNormalizeds',
        'positionRefer' => 'PositionRefer',
        'widthNormalized' => 'WidthNormalized',
    ];

    public function validate()
    {
        if (null !== $this->positionNormalizeds) {
            $this->positionNormalizeds->validate();
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

        if (null !== $this->positionNormalizeds) {
            $res['PositionNormalizeds'] = null !== $this->positionNormalizeds ? $this->positionNormalizeds->toArray($noStream) : $this->positionNormalizeds;
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

        if (isset($map['PositionNormalizeds'])) {
            $model->positionNormalizeds = positionNormalizeds::fromMap($map['PositionNormalizeds']);
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
