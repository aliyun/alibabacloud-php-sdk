<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSlowQueryCategoriesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The status of the analysis. Valid values:
     *
     *   PENDING: preparing
     *   SUCCESS: succeeded
     *   RUNNING: running
     *   FAILED: failed
     *   N/A: unknown
     *
     * @example "PENDING"
     *
     * @var string
     */
    public $analyzeStatus;

    /**
     * @description The timestamp that indicates the end of the time range to query.
     *
     * @example 1589990340
     *
     * @var int
     */
    public $end;

    /**
     * @description The timestamp that indicates the beginning of the time range to query.
     *
     * @example 1589986800
     *
     * @var int
     */
    public $start;
    protected $_name = [
        'analyzeStatus' => 'analyzeStatus',
        'end'           => 'end',
        'start'         => 'start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analyzeStatus) {
            $res['analyzeStatus'] = $this->analyzeStatus;
        }
        if (null !== $this->end) {
            $res['end'] = $this->end;
        }
        if (null !== $this->start) {
            $res['start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['analyzeStatus'])) {
            $model->analyzeStatus = $map['analyzeStatus'];
        }
        if (isset($map['end'])) {
            $model->end = $map['end'];
        }
        if (isset($map['start'])) {
            $model->start = $map['start'];
        }

        return $model;
    }
}
