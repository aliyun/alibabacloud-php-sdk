<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetHistogramsResponseBody\data;

use AlibabaCloud\Tea\Model;

class histograms extends Model
{
    /**
     * @description Indicates whether the query results within the subinterval is complete. Valid values:
     *
     *   true: The query is complete and the returned result is complete.
     *   false: The query is complete but the returned result is incomplete. You must repeat the request to obtain the complete result.
     *
     * @example true
     *
     * @var bool
     */
    public $completedOrNot;

    /**
     * @description The number of logs within the subinterval.
     *
     * @example 100
     *
     * @var int
     */
    public $count;

    /**
     * @description The start time of the subinterval. The value is a UNIX timestamp representing the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1409529600
     *
     * @var int
     */
    public $from;

    /**
     * @description The end time of the subinterval. The value is a UNIX timestamp representing the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1409569200
     *
     * @var int
     */
    public $to;
    protected $_name = [
        'completedOrNot' => 'CompletedOrNot',
        'count'          => 'Count',
        'from'           => 'From',
        'to'             => 'To',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completedOrNot) {
            $res['CompletedOrNot'] = $this->completedOrNot;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return histograms
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompletedOrNot'])) {
            $model->completedOrNot = $map['CompletedOrNot'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
