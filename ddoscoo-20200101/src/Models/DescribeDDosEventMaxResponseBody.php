<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDDosEventMaxResponseBody extends Model
{
    /**
     * @description The peak of connection flood attacks. Unit: connections per seconds (CPS).
     *
     * @example 1302
     *
     * @var int
     */
    public $cps;

    /**
     * @description The peak of volumetric attacks. Unit: Mbit/s.
     *
     * @example 6809
     *
     * @var int
     */
    public $mbps;

    /**
     * @description The peak of resource exhaustion attacks. Unit: queries per second (QPS).
     *
     * @example 26314
     *
     * @var int
     */
    public $qps;

    /**
     * @description The ID of the request.
     *
     * @example 5AE2FC86-C840-41AE-9F1A-3A2747C7C1DF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cps'       => 'Cps',
        'mbps'      => 'Mbps',
        'qps'       => 'Qps',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
        }
        if (null !== $this->mbps) {
            $res['Mbps'] = $this->mbps;
        }
        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDDosEventMaxResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }
        if (isset($map['Mbps'])) {
            $model->mbps = $map['Mbps'];
        }
        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
