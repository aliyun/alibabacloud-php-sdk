<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersResponseBody\clusters\clusterInfoSimple;

use AlibabaCloud\Tea\Model;

class managers extends Model
{
    /**
     * @var int
     */
    public $operatingCount;

    /**
     * @var int
     */
    public $exceptionCount;

    /**
     * @var int
     */
    public $stoppedCount;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $normalCount;
    protected $_name = [
        'operatingCount' => 'OperatingCount',
        'exceptionCount' => 'ExceptionCount',
        'stoppedCount'   => 'StoppedCount',
        'total'          => 'Total',
        'normalCount'    => 'NormalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operatingCount) {
            $res['OperatingCount'] = $this->operatingCount;
        }
        if (null !== $this->exceptionCount) {
            $res['ExceptionCount'] = $this->exceptionCount;
        }
        if (null !== $this->stoppedCount) {
            $res['StoppedCount'] = $this->stoppedCount;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->normalCount) {
            $res['NormalCount'] = $this->normalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return managers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperatingCount'])) {
            $model->operatingCount = $map['OperatingCount'];
        }
        if (isset($map['ExceptionCount'])) {
            $model->exceptionCount = $map['ExceptionCount'];
        }
        if (isset($map['StoppedCount'])) {
            $model->stoppedCount = $map['StoppedCount'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['NormalCount'])) {
            $model->normalCount = $map['NormalCount'];
        }

        return $model;
    }
}
