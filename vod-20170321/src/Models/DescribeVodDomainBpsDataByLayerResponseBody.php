<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainBpsDataByLayerResponseBody\bpsDataInterval;
use AlibabaCloud\Tea\Model;

class DescribeVodDomainBpsDataByLayerResponseBody extends Model
{
    /**
     * @var bpsDataInterval
     */
    public $bpsDataInterval;

    /**
     * @example 300
     *
     * @var int
     */
    public $dataInterval;

    /**
     * @example 25818875-5F78-4A*****F6-D7393642CA58
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bpsDataInterval' => 'BpsDataInterval',
        'dataInterval'    => 'DataInterval',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bpsDataInterval) {
            $res['BpsDataInterval'] = null !== $this->bpsDataInterval ? $this->bpsDataInterval->toMap() : null;
        }
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodDomainBpsDataByLayerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BpsDataInterval'])) {
            $model->bpsDataInterval = bpsDataInterval::fromMap($map['BpsDataInterval']);
        }
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
