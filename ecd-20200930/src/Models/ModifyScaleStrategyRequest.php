<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyScaleStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scaleStrategyId;

    /**
     * @var string
     */
    public $scaleStrategyName;

    /**
     * @var string
     */
    public $scaleStrategyType;

    /**
     * @var int
     */
    public $minDesktopsCount;

    /**
     * @var int
     */
    public $maxDesktopsCount;

    /**
     * @var int
     */
    public $minAvailableDesktopsCount;

    /**
     * @var int
     */
    public $maxAvailableDesktopsCount;

    /**
     * @var int
     */
    public $scaleStep;
    protected $_name = [
        'regionId'                  => 'RegionId',
        'scaleStrategyId'           => 'ScaleStrategyId',
        'scaleStrategyName'         => 'ScaleStrategyName',
        'scaleStrategyType'         => 'ScaleStrategyType',
        'minDesktopsCount'          => 'MinDesktopsCount',
        'maxDesktopsCount'          => 'MaxDesktopsCount',
        'minAvailableDesktopsCount' => 'MinAvailableDesktopsCount',
        'maxAvailableDesktopsCount' => 'MaxAvailableDesktopsCount',
        'scaleStep'                 => 'ScaleStep',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scaleStrategyId) {
            $res['ScaleStrategyId'] = $this->scaleStrategyId;
        }
        if (null !== $this->scaleStrategyName) {
            $res['ScaleStrategyName'] = $this->scaleStrategyName;
        }
        if (null !== $this->scaleStrategyType) {
            $res['ScaleStrategyType'] = $this->scaleStrategyType;
        }
        if (null !== $this->minDesktopsCount) {
            $res['MinDesktopsCount'] = $this->minDesktopsCount;
        }
        if (null !== $this->maxDesktopsCount) {
            $res['MaxDesktopsCount'] = $this->maxDesktopsCount;
        }
        if (null !== $this->minAvailableDesktopsCount) {
            $res['MinAvailableDesktopsCount'] = $this->minAvailableDesktopsCount;
        }
        if (null !== $this->maxAvailableDesktopsCount) {
            $res['MaxAvailableDesktopsCount'] = $this->maxAvailableDesktopsCount;
        }
        if (null !== $this->scaleStep) {
            $res['ScaleStep'] = $this->scaleStep;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyScaleStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ScaleStrategyId'])) {
            $model->scaleStrategyId = $map['ScaleStrategyId'];
        }
        if (isset($map['ScaleStrategyName'])) {
            $model->scaleStrategyName = $map['ScaleStrategyName'];
        }
        if (isset($map['ScaleStrategyType'])) {
            $model->scaleStrategyType = $map['ScaleStrategyType'];
        }
        if (isset($map['MinDesktopsCount'])) {
            $model->minDesktopsCount = $map['MinDesktopsCount'];
        }
        if (isset($map['MaxDesktopsCount'])) {
            $model->maxDesktopsCount = $map['MaxDesktopsCount'];
        }
        if (isset($map['MinAvailableDesktopsCount'])) {
            $model->minAvailableDesktopsCount = $map['MinAvailableDesktopsCount'];
        }
        if (isset($map['MaxAvailableDesktopsCount'])) {
            $model->maxAvailableDesktopsCount = $map['MaxAvailableDesktopsCount'];
        }
        if (isset($map['ScaleStep'])) {
            $model->scaleStep = $map['ScaleStep'];
        }

        return $model;
    }
}
