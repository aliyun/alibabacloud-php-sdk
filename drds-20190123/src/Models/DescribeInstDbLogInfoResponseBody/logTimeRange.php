<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstDbLogInfoResponseBody;

use AlibabaCloud\Tea\Model;

class logTimeRange extends Model
{
    /**
     * @description The start time of the query time range.
     *
     * @example 1568267711
     *
     * @var int
     */
    public $supportLatestTime;

    /**
     * @description The end time of the task.
     *
     * @example 1568367711
     *
     * @var int
     */
    public $supportOldestTime;
    protected $_name = [
        'supportLatestTime' => 'SupportLatestTime',
        'supportOldestTime' => 'SupportOldestTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportLatestTime) {
            $res['SupportLatestTime'] = $this->supportLatestTime;
        }
        if (null !== $this->supportOldestTime) {
            $res['SupportOldestTime'] = $this->supportOldestTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logTimeRange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportLatestTime'])) {
            $model->supportLatestTime = $map['SupportLatestTime'];
        }
        if (isset($map['SupportOldestTime'])) {
            $model->supportOldestTime = $map['SupportOldestTime'];
        }

        return $model;
    }
}
