<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models;

use AlibabaCloud\Tea\Model;

class DescribeSyncReportDetailRequest extends Model
{
    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $levelType;
    protected $_name = [
        'startTime' => 'StartTime',
        'endTime'   => 'EndTime',
        'type'      => 'Type',
        'levelType' => 'LevelType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->levelType) {
            $res['LevelType'] = $this->levelType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSyncReportDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['LevelType'])) {
            $model->levelType = $map['LevelType'];
        }

        return $model;
    }
}
