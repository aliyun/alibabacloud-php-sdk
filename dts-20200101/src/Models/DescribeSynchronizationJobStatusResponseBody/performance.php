<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobStatusResponseBody;

use AlibabaCloud\Tea\Model;

class performance extends Model
{
    /**
     * @description The data traffic that is synchronized per second. Unit: MB/s.
     *
     * @example 1
     *
     * @var string
     */
    public $FLOW;

    /**
     * @description The number of times SQL statements are synchronized per second, including BEGIN, COMMIT, DML, and DDL statements. DML statements include INSERT, DELETE, and UPDATE.
     *
     * @example 100
     *
     * @var string
     */
    public $RPS;
    protected $_name = [
        'FLOW' => 'FLOW',
        'RPS'  => 'RPS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->FLOW) {
            $res['FLOW'] = $this->FLOW;
        }
        if (null !== $this->RPS) {
            $res['RPS'] = $this->RPS;
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
        if (isset($map['FLOW'])) {
            $model->FLOW = $map['FLOW'];
        }
        if (isset($map['RPS'])) {
            $model->RPS = $map['RPS'];
        }

        return $model;
    }
}
