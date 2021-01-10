<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponseBody\layouts\layout\videoLayers;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponseBody\layouts\layout\videoLayers\videoLayer\positionNormalizeds;
use AlibabaCloud\Tea\Model;

class videoLayer extends Model
{
    /**
     * @var int
     */
    public $fixedDelayDuration;

    /**
     * @var positionNormalizeds
     */
    public $positionNormalizeds;

    /**
     * @var float
     */
    public $heightNormalized;

    /**
     * @var string
     */
    public $fillMode;

    /**
     * @var string
     */
    public $positionRefer;

    /**
     * @var float
     */
    public $widthNormalized;
    protected $_name = [
        'fixedDelayDuration'  => 'FixedDelayDuration',
        'positionNormalizeds' => 'PositionNormalizeds',
        'heightNormalized'    => 'HeightNormalized',
        'fillMode'            => 'FillMode',
        'positionRefer'       => 'PositionRefer',
        'widthNormalized'     => 'WidthNormalized',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fixedDelayDuration) {
            $res['FixedDelayDuration'] = $this->fixedDelayDuration;
        }
        if (null !== $this->positionNormalizeds) {
            $res['PositionNormalizeds'] = null !== $this->positionNormalizeds ? $this->positionNormalizeds->toMap() : null;
        }
        if (null !== $this->heightNormalized) {
            $res['HeightNormalized'] = $this->heightNormalized;
        }
        if (null !== $this->fillMode) {
            $res['FillMode'] = $this->fillMode;
        }
        if (null !== $this->positionRefer) {
            $res['PositionRefer'] = $this->positionRefer;
        }
        if (null !== $this->widthNormalized) {
            $res['WidthNormalized'] = $this->widthNormalized;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoLayer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FixedDelayDuration'])) {
            $model->fixedDelayDuration = $map['FixedDelayDuration'];
        }
        if (isset($map['PositionNormalizeds'])) {
            $model->positionNormalizeds = positionNormalizeds::fromMap($map['PositionNormalizeds']);
        }
        if (isset($map['HeightNormalized'])) {
            $model->heightNormalized = $map['HeightNormalized'];
        }
        if (isset($map['FillMode'])) {
            $model->fillMode = $map['FillMode'];
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
