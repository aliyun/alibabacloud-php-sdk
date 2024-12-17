<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeMediaDistributionResponseBody;

use AlibabaCloud\Tea\Model;

class mediaDistributionList extends Model
{
    /**
     * @example 12
     *
     * @var int
     */
    public $count;

    /**
     * @example 2017-11-14T00:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2017-11-13T00:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'count'     => 'Count',
        'endTime'   => 'EndTime',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaDistributionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
