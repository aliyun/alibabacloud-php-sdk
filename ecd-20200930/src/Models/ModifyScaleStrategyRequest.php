<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyScaleStrategyRequest extends Model
{
    /**
     * @var int
     */
    public $maxAvailableDesktopsCount;

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
    public $minDesktopsCount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $scaleStep;

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
    protected $_name = [
        'maxAvailableDesktopsCount' => 'MaxAvailableDesktopsCount',
        'maxDesktopsCount'          => 'MaxDesktopsCount',
        'minAvailableDesktopsCount' => 'MinAvailableDesktopsCount',
        'minDesktopsCount'          => 'MinDesktopsCount',
        'regionId'                  => 'RegionId',
        'scaleStep'                 => 'ScaleStep',
        'scaleStrategyId'           => 'ScaleStrategyId',
        'scaleStrategyName'         => 'ScaleStrategyName',
        'scaleStrategyType'         => 'ScaleStrategyType',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('scaleStrategyId', $this->scaleStrategyId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxAvailableDesktopsCount) {
            $res['MaxAvailableDesktopsCount'] = $this->maxAvailableDesktopsCount;
        }
        if (null !== $this->maxDesktopsCount) {
            $res['MaxDesktopsCount'] = $this->maxDesktopsCount;
        }
        if (null !== $this->minAvailableDesktopsCount) {
            $res['MinAvailableDesktopsCount'] = $this->minAvailableDesktopsCount;
        }
        if (null !== $this->minDesktopsCount) {
            $res['MinDesktopsCount'] = $this->minDesktopsCount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scaleStep) {
            $res['ScaleStep'] = $this->scaleStep;
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
        if (isset($map['MaxAvailableDesktopsCount'])) {
            $model->maxAvailableDesktopsCount = $map['MaxAvailableDesktopsCount'];
        }
        if (isset($map['MaxDesktopsCount'])) {
            $model->maxDesktopsCount = $map['MaxDesktopsCount'];
        }
        if (isset($map['MinAvailableDesktopsCount'])) {
            $model->minAvailableDesktopsCount = $map['MinAvailableDesktopsCount'];
        }
        if (isset($map['MinDesktopsCount'])) {
            $model->minDesktopsCount = $map['MinDesktopsCount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ScaleStep'])) {
            $model->scaleStep = $map['ScaleStep'];
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

        return $model;
    }
}
