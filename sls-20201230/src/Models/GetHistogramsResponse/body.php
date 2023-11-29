<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\GetHistogramsResponse;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description The start time of the subinterval. The value is a UNIX timestamp representing the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * The time range that is specified in this operation is a left-closed, right-open interval. The interval includes the start time specified by the from parameter, but does not include the end time specified by the to parameter. If you specify the same value for the from and to parameters, the interval is invalid, and an error message is returned.
     * @example 1409529600
     *
     * @var int
     */
    public $from;

    /**
     * @description The end time of the subinterval. The value is a UNIX timestamp representing the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * The time range that is specified in this operation is a left-closed, right-open interval. The interval includes the start time specified by the from parameter, but does not include the end time specified by the to parameter. If you specify the same value for the from and to parameters, the interval is invalid, and an error message is returned.
     * @example 1409569200
     *
     * @var int
     */
    public $to;

    /**
     * @description The number of logs that are generated within the subinterval.
     *
     * @example 2
     *
     * @var int
     */
    public $count;

    /**
     * @description Indicates whether the query and analysis results in the subinterval is complete. Valid values:
     *
     * Incomplete: The query is successful, but the query and analysis results are incomplete. To obtain the complete results, you must repeat the request.
     * @example Complete
     *
     * @var string
     */
    public $progress;
    protected $_name = [
        'from'     => 'from',
        'to'       => 'to',
        'count'    => 'count',
        'progress' => 'progress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['from'] = $this->from;
        }
        if (null !== $this->to) {
            $res['to'] = $this->to;
        }
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['from'])) {
            $model->from = $map['from'];
        }
        if (isset($map['to'])) {
            $model->to = $map['to'];
        }
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }

        return $model;
    }
}
