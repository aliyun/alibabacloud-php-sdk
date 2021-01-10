<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterLayoutRequest;

use AlibabaCloud\Tea\Model;

class videoLayer extends Model
{
    /**
     * @var int
     */
    public $fixedDelayDuration;

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
     * @var int[]
     */
    public $positionNormalized;

    /**
     * @var float
     */
    public $widthNormalized;
    protected $_name = [
        'fixedDelayDuration' => 'FixedDelayDuration',
        'heightNormalized'   => 'HeightNormalized',
        'fillMode'           => 'FillMode',
        'positionRefer'      => 'PositionRefer',
        'positionNormalized' => 'PositionNormalized',
        'widthNormalized'    => 'WidthNormalized',
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
        if (null !== $this->heightNormalized) {
            $res['HeightNormalized'] = $this->heightNormalized;
        }
        if (null !== $this->fillMode) {
            $res['FillMode'] = $this->fillMode;
        }
        if (null !== $this->positionRefer) {
            $res['PositionRefer'] = $this->positionRefer;
        }
        if (null !== $this->positionNormalized) {
            $res['PositionNormalized'] = $this->positionNormalized;
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
        if (isset($map['HeightNormalized'])) {
            $model->heightNormalized = $map['HeightNormalized'];
        }
        if (isset($map['FillMode'])) {
            $model->fillMode = $map['FillMode'];
        }
        if (isset($map['PositionRefer'])) {
            $model->positionRefer = $map['PositionRefer'];
        }
        if (isset($map['PositionNormalized'])) {
            if (!empty($map['PositionNormalized'])) {
                $model->positionNormalized = $map['PositionNormalized'];
            }
        }
        if (isset($map['WidthNormalized'])) {
            $model->widthNormalized = $map['WidthNormalized'];
        }

        return $model;
    }
}
