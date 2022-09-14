<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20170714\Models\ListClustersResponseBody\clusters\clusterInfoSimple;

use AlibabaCloud\Tea\Model;

class computes extends Model
{
    /**
     * @var int
     */
    public $exceptionCount;

    /**
     * @var int
     */
    public $normalCount;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'exceptionCount' => 'ExceptionCount',
        'normalCount'    => 'NormalCount',
        'total'          => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exceptionCount) {
            $res['ExceptionCount'] = $this->exceptionCount;
        }
        if (null !== $this->normalCount) {
            $res['NormalCount'] = $this->normalCount;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return computes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExceptionCount'])) {
            $model->exceptionCount = $map['ExceptionCount'];
        }
        if (isset($map['NormalCount'])) {
            $model->normalCount = $map['NormalCount'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
