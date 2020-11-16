<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterLayoutRequest;

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
     * @var float[]
     */
    public $positionNormalized;

    /**
     * @var int
     */
    public $fixedDelayDuration;
    protected $_name = [
        'fillMode'           => 'FillMode',
        'heightNormalized'   => 'HeightNormalized',
        'widthNormalized'    => 'WidthNormalized',
        'positionRefer'      => 'PositionRefer',
        'positionNormalized' => 'PositionNormalized',
        'fixedDelayDuration' => 'FixedDelayDuration',
    ];

    public function validate()
    {
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
        if (null !== $this->positionNormalized) {
            $res['PositionNormalized'] = $this->positionNormalized;
        }
        if (null !== $this->fixedDelayDuration) {
            $res['FixedDelayDuration'] = $this->fixedDelayDuration;
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
        if (isset($map['PositionNormalized'])) {
            if (!empty($map['PositionNormalized'])) {
                $model->positionNormalized = $map['PositionNormalized'];
            }
        }
        if (isset($map['FixedDelayDuration'])) {
            $model->fixedDelayDuration = $map['FixedDelayDuration'];
        }

        return $model;
    }
}
