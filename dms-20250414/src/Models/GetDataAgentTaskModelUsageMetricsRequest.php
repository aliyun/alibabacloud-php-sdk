<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class GetDataAgentTaskModelUsageMetricsRequest extends Model
{
    /**
     * @var string
     */
    public $beginTime;

    /**
     * @var string
     */
    public $DMSUnit;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'beginTime' => 'BeginTime',
        'DMSUnit' => 'DMSUnit',
        'endTime' => 'EndTime',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->DMSUnit) {
            $res['DMSUnit'] = $this->DMSUnit;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        if (isset($map['DMSUnit'])) {
            $model->DMSUnit = $map['DMSUnit'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
