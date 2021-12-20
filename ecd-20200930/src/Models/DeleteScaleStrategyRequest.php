<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DeleteScaleStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scaleStrategyId;
    protected $_name = [
        'regionId'        => 'RegionId',
        'scaleStrategyId' => 'ScaleStrategyId',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('scaleStrategyId', $this->scaleStrategyId, true);
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteScaleStrategyRequest
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

        return $model;
    }
}
