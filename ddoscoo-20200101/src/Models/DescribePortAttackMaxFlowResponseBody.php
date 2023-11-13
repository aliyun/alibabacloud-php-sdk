<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribePortAttackMaxFlowResponseBody extends Model
{
    /**
     * @description The peak bandwidth of attack traffic. Unit: bit/s.
     *
     * @example 149559
     *
     * @var int
     */
    public $bps;

    /**
     * @description The peak packet rate of attack traffic . Unit: packets per second (pps).
     *
     * @example 23
     *
     * @var int
     */
    public $pps;

    /**
     * @description The ID of the request.
     *
     * @example C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E
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
     * @return DescribePortAttackMaxFlowResponseBody
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
