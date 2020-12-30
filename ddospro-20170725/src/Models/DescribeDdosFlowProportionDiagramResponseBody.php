<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models;

use AlibabaCloud\Tea\Model;

class DescribeDdosFlowProportionDiagramResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalBps;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $dropPps;

    /**
     * @var int
     */
    public $dropBps;

    /**
     * @var int
     */
    public $totalPps;
    protected $_name = [
        'totalBps'  => 'TotalBps',
        'requestId' => 'RequestId',
        'dropPps'   => 'DropPps',
        'dropBps'   => 'DropBps',
        'totalPps'  => 'TotalPps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalBps) {
            $res['TotalBps'] = $this->totalBps;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dropPps) {
            $res['DropPps'] = $this->dropPps;
        }
        if (null !== $this->dropBps) {
            $res['DropBps'] = $this->dropBps;
        }
        if (null !== $this->totalPps) {
            $res['TotalPps'] = $this->totalPps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDdosFlowProportionDiagramResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalBps'])) {
            $model->totalBps = $map['TotalBps'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DropPps'])) {
            $model->dropPps = $map['DropPps'];
        }
        if (isset($map['DropBps'])) {
            $model->dropBps = $map['DropBps'];
        }
        if (isset($map['TotalPps'])) {
            $model->totalPps = $map['TotalPps'];
        }

        return $model;
    }
}
