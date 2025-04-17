<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainBpsDataByLayerResponseBody\bpsDataInterval;

class DescribeVodDomainBpsDataByLayerResponseBody extends Model
{
    /**
     * @var bpsDataInterval
     */
    public $bpsDataInterval;

    /**
     * @var int
     */
    public $dataInterval;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bpsDataInterval' => 'BpsDataInterval',
        'dataInterval' => 'DataInterval',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->bpsDataInterval) {
            $this->bpsDataInterval->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bpsDataInterval) {
            $res['BpsDataInterval'] = null !== $this->bpsDataInterval ? $this->bpsDataInterval->toArray($noStream) : $this->bpsDataInterval;
        }

        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
