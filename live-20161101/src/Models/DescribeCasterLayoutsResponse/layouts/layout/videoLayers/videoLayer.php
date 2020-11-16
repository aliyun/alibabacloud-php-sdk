<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponse\layouts\layout\videoLayers;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponse\layouts\layout\videoLayers\videoLayer\positionNormalizeds;
use AlibabaCloud\Tea\Model;

class videoLayer extends Model
{
    /**
     * @var string
     */
    public $fillMode;

    /**
     * @var float
     */
    public $heightNormalized;

    /**
     * @var float
     */
    public $widthNormalized;

    /**
     * @var string
     */
    public $positionRefer;

    /**
     * @var int
     */
    public $fixedDelayDuration;

    /**
     * @var positionNormalizeds
     */
    public $positionNormalizeds;
    protected $_name = [
        'fillMode'            => 'FillMode',
        'heightNormalized'    => 'HeightNormalized',
        'widthNormalized'     => 'WidthNormalized',
        'positionRefer'       => 'PositionRefer',
        'fixedDelayDuration'  => 'FixedDelayDuration',
        'positionNormalizeds' => 'PositionNormalizeds',
    ];

    public function validate()
    {
        Model::validateRequired('fillMode', $this->fillMode, true);
        Model::validateRequired('heightNormalized', $this->heightNormalized, true);
        Model::validateRequired('widthNormalized', $this->widthNormalized, true);
        Model::validateRequired('positionRefer', $this->positionRefer, true);
        Model::validateRequired('fixedDelayDuration', $this->fixedDelayDuration, true);
        Model::validateRequired('positionNormalizeds', $this->positionNormalizeds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fillMode) {
            $res['FillMode'] = $this->fillMode;
        }
        if (null !== $this->heightNormalized) {
            $res['HeightNormalized'] = $this->heightNormalized;
        }
        if (null !== $this->widthNormalized) {
            $res['WidthNormalized'] = $this->widthNormalized;
        }
        if (null !== $this->positionRefer) {
            $res['PositionRefer'] = $this->positionRefer;
        }
        if (null !== $this->fixedDelayDuration) {
            $res['FixedDelayDuration'] = $this->fixedDelayDuration;
        }
        if (null !== $this->positionNormalizeds) {
            $res['PositionNormalizeds'] = null !== $this->positionNormalizeds ? $this->positionNormalizeds->toMap() : null;
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
        if (isset($map['FillMode'])) {
            $model->fillMode = $map['FillMode'];
        }
        if (isset($map['HeightNormalized'])) {
            $model->heightNormalized = $map['HeightNormalized'];
        }
        if (isset($map['WidthNormalized'])) {
            $model->widthNormalized = $map['WidthNormalized'];
        }
        if (isset($map['PositionRefer'])) {
            $model->positionRefer = $map['PositionRefer'];
        }
        if (isset($map['FixedDelayDuration'])) {
            $model->fixedDelayDuration = $map['FixedDelayDuration'];
        }
        if (isset($map['PositionNormalizeds'])) {
            $model->positionNormalizeds = positionNormalizeds::fromMap($map['PositionNormalizeds']);
        }

        return $model;
    }
}
