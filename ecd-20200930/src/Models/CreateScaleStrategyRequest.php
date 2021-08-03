<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateScaleStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scaleStrategyName;

    /**
     * @var string
     */
    public $scaleStrategyType;

    /**
     * @var string
     */
    public $payType;

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

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'regionId'                  => 'RegionId',
        'scaleStrategyName'         => 'ScaleStrategyName',
        'scaleStrategyType'         => 'ScaleStrategyType',
        'payType'                   => 'PayType',
        'minDesktopsCount'          => 'MinDesktopsCount',
        'maxDesktopsCount'          => 'MaxDesktopsCount',
        'minAvailableDesktopsCount' => 'MinAvailableDesktopsCount',
        'maxAvailableDesktopsCount' => 'MaxAvailableDesktopsCount',
        'scaleStep'                 => 'ScaleStep',
        'clientToken'               => 'ClientToken',
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
        if (null !== $this->scaleStrategyName) {
            $res['ScaleStrategyName'] = $this->scaleStrategyName;
        }
        if (null !== $this->scaleStrategyType) {
            $res['ScaleStrategyType'] = $this->scaleStrategyType;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScaleStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ScaleStrategyName'])) {
            $model->scaleStrategyName = $map['ScaleStrategyName'];
        }
        if (isset($map['ScaleStrategyType'])) {
            $model->scaleStrategyType = $map['ScaleStrategyType'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
