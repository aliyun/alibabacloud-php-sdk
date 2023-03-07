<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersResponseBody\clusters\clusterInfoSimple;

use AlibabaCloud\Tea\Model;

class computes extends Model
{
    /**
     * @description The number of abnormal nodes.
     *
     * @example 0
     *
     * @var int
     */
    public $exceptionCount;

    /**
     * @description The number of normal nodes.
     *
     * @example 1
     *
     * @var int
     */
    public $normalCount;

    /**
     * @description The number of nodes that are being used in the queue. This includes those that are being initialized, installed, or released.
     *
     * @example 1
     *
     * @var int
     */
    public $operatingCount;

    /**
     * @description The number of stopped nodes.
     *
     * @example 0
     *
     * @var int
     */
    public $stoppedCount;

    /**
     * @description The total number of nodes.
     *
     * @example 2
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'exceptionCount' => 'ExceptionCount',
        'normalCount'    => 'NormalCount',
        'operatingCount' => 'OperatingCount',
        'stoppedCount'   => 'StoppedCount',
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
        if (null !== $this->operatingCount) {
            $res['OperatingCount'] = $this->operatingCount;
        }
        if (null !== $this->stoppedCount) {
            $res['StoppedCount'] = $this->stoppedCount;
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
        if (isset($map['OperatingCount'])) {
            $model->operatingCount = $map['OperatingCount'];
        }
        if (isset($map['StoppedCount'])) {
            $model->stoppedCount = $map['StoppedCount'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
