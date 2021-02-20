<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDDosEventMaxResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $qps;

    /**
     * @var int
     */
    public $cps;

    /**
     * @var int
     */
    public $mbps;
    protected $_name = [
        'requestId' => 'RequestId',
        'qps'       => 'Qps',
        'cps'       => 'Cps',
        'mbps'      => 'Mbps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }
        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
        }
        if (null !== $this->mbps) {
            $res['Mbps'] = $this->mbps;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }
        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }
        if (isset($map['Mbps'])) {
            $model->mbps = $map['Mbps'];
        }

        return $model;
    }
}
