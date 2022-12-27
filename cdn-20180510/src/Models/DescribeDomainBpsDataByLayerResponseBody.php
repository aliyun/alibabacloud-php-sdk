<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainBpsDataByLayerResponseBody\bpsDataInterval;
use AlibabaCloud\Tea\Model;

class DescribeDomainBpsDataByLayerResponseBody extends Model
{
    /**
     * @description The number of bytes per second collected at each time interval.
     *
     * @var bpsDataInterval
     */
    public $bpsDataInterval;

    /**
     * @description The time interval between the data entries. Unit: seconds.
     *
     * @example 300
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The ID of the request.
     *
     * @example C565B910-BC3B-467B-9046-2A48566EA967
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
     * @return DescribeDomainBpsDataByLayerResponseBody
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
