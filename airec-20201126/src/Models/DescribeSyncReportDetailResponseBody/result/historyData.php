<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\DescribeSyncReportDetailResponseBody\result;

use AlibabaCloud\Tea\Model;

class historyData extends Model
{
    /**
     * @example 1586673466
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 84.6
     *
     * @var float
     */
    public $errorPercent;

    /**
     * @example 1586673466
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'      => 'endTime',
        'errorPercent' => 'errorPercent',
        'startTime'    => 'startTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->errorPercent) {
            $res['errorPercent'] = $this->errorPercent;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return historyData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['errorPercent'])) {
            $model->errorPercent = $map['errorPercent'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
