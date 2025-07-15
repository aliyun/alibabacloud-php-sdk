<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainBpsDataByLayerResponseBody\bpsDataInterval;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainBpsDataByLayerResponseBody extends Model
{
    /**
     * @description The data returned at each time interval.
     *
     * @var bpsDataInterval
     */
    public $bpsDataInterval;

    /**
     * @description The time interval between the data entries returned. Unit: seconds.
     *
     * @example 300
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The request ID.
     *
     * @example BEA5625F-8FCF-48F4-851B-2A48566EA967
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bpsDataInterval' => 'BpsDataInterval',
        'dataInterval' => 'DataInterval',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

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
     * @return DescribeLiveDomainBpsDataByLayerResponseBody
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
