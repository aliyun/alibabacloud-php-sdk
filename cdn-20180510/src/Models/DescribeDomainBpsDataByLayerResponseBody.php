<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainBpsDataByLayerResponseBody\bpsDataInterval;
use AlibabaCloud\Tea\Model;

class DescribeDomainBpsDataByLayerResponseBody extends Model
{
    /**
     * @var string
     */
    public $dataInterval;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bpsDataInterval
     */
    public $bpsDataInterval;
    protected $_name = [
        'dataInterval'    => 'DataInterval',
        'requestId'       => 'RequestId',
        'bpsDataInterval' => 'BpsDataInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->bpsDataInterval) {
            $res['BpsDataInterval'] = null !== $this->bpsDataInterval ? $this->bpsDataInterval->toMap() : null;
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
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BpsDataInterval'])) {
            $model->bpsDataInterval = bpsDataInterval::fromMap($map['BpsDataInterval']);
        }

        return $model;
    }
}
