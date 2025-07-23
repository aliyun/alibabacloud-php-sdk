<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\MaintainWindowForModify\effectTimeRange;
use AlibabaCloud\Tea\Model;

class MaintainWindowForModify extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var effectTimeRange
     */
    public $effectTimeRange;

    /**
     * @var string
     */
    public $effective;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var FilterSetting
     */
    public $filterSetting;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $maintainWindowName;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'description' => 'description',
        'effectTimeRange' => 'effectTimeRange',
        'effective' => 'effective',
        'endTime' => 'endTime',
        'filterSetting' => 'filterSetting',
        'maintainWindowName' => 'maintainWindowName',
        'startTime' => 'startTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->effectTimeRange) {
            $res['effectTimeRange'] = null !== $this->effectTimeRange ? $this->effectTimeRange->toMap() : null;
        }
        if (null !== $this->effective) {
            $res['effective'] = $this->effective;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->filterSetting) {
            $res['filterSetting'] = null !== $this->filterSetting ? $this->filterSetting->toMap() : null;
        }
        if (null !== $this->maintainWindowName) {
            $res['maintainWindowName'] = $this->maintainWindowName;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MaintainWindowForModify
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['effectTimeRange'])) {
            $model->effectTimeRange = effectTimeRange::fromMap($map['effectTimeRange']);
        }
        if (isset($map['effective'])) {
            $model->effective = $map['effective'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['filterSetting'])) {
            $model->filterSetting = FilterSetting::fromMap($map['filterSetting']);
        }
        if (isset($map['maintainWindowName'])) {
            $model->maintainWindowName = $map['maintainWindowName'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
