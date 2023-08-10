<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\dtsJobList\reverseJob;

use AlibabaCloud\Tea\Model;

class performance extends Model
{
    /**
     * @description The size of data that is synchronized per second. Unit: MB/s.
     *
     * @example 1
     *
     * @var string
     */
    public $flow;

    /**
     * @description The number of times that SQL statements are synchronized per second, including BEGIN, COMMIT, DML, and DDL statements. DML statements include INSERT, DELETE, and UPDATE.
     *
     * @example 100
     *
     * @var string
     */
    public $rps;
    protected $_name = [
        'flow' => 'Flow',
        'rps'  => 'Rps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flow) {
            $res['Flow'] = $this->flow;
        }
        if (null !== $this->rps) {
            $res['Rps'] = $this->rps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Flow'])) {
            $model->flow = $map['Flow'];
        }
        if (isset($map['Rps'])) {
            $model->rps = $map['Rps'];
        }

        return $model;
    }
}
