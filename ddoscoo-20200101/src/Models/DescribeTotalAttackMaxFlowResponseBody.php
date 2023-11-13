<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeTotalAttackMaxFlowResponseBody extends Model
{
    /**
     * @description The peak bandwidth of attack traffic. Unit: bit/s.
     *
     * @example 0
     *
     * @var int
     */
    public $bps;

    /**
     * @description The peak packet rate of attack traffic . Unit: packets per second (pps).
     *
     * @example 0
     *
     * @var int
     */
    public $pps;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 9173A3CB-C40B-559B-96B7-2373830BD06A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bps'       => 'Bps',
        'pps'       => 'Pps',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->pps) {
            $res['Pps'] = $this->pps;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTotalAttackMaxFlowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['Pps'])) {
            $model->pps = $map['Pps'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
