<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetLogsResponseBody\data;

use AlibabaCloud\Tea\Model;

class responseData extends Model
{
    /**
     * @description The status of the log query. Valid values:
     *
     *   true: The query is complete and the returned result is complete.
     *   false: The query is complete but the returned result is incomplete. You must resend the request to obtain the complete result.
     *
     * @example true
     *
     * @var bool
     */
    public $completeOrNot;

    /**
     * @description The time period of the log query. Unit: milliseconds.
     *
     * @example 28
     *
     * @var int
     */
    public $cost;

    /**
     * @description The number of entries returned.
     *
     * @example 4
     *
     * @var int
     */
    public $count;

    /**
     * @description Indicated whether an analytic statement is contained. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $hasSql;

    /**
     * @description The index fields of the logs.
     *
     * @var string[]
     */
    public $keys;

    /**
     * @description The raw data generated in the query.
     *
     * @var mixed[]
     */
    public $lines;
    protected $_name = [
        'completeOrNot' => 'CompleteOrNot',
        'cost'          => 'Cost',
        'count'         => 'Count',
        'hasSql'        => 'HasSql',
        'keys'          => 'Keys',
        'lines'         => 'Lines',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completeOrNot) {
            $res['CompleteOrNot'] = $this->completeOrNot;
        }
        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->hasSql) {
            $res['HasSql'] = $this->hasSql;
        }
        if (null !== $this->keys) {
            $res['Keys'] = $this->keys;
        }
        if (null !== $this->lines) {
            $res['Lines'] = $this->lines;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return responseData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompleteOrNot'])) {
            $model->completeOrNot = $map['CompleteOrNot'];
        }
        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['HasSql'])) {
            $model->hasSql = $map['HasSql'];
        }
        if (isset($map['Keys'])) {
            if (!empty($map['Keys'])) {
                $model->keys = $map['Keys'];
            }
        }
        if (isset($map['Lines'])) {
            if (!empty($map['Lines'])) {
                $model->lines = $map['Lines'];
            }
        }

        return $model;
    }
}
