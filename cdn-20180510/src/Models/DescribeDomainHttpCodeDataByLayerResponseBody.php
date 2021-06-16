<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainHttpCodeDataByLayerResponseBody\httpCodeDataInterval;
use AlibabaCloud\Tea\Model;

class DescribeDomainHttpCodeDataByLayerResponseBody extends Model
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
     * @var httpCodeDataInterval
     */
    public $httpCodeDataInterval;
    protected $_name = [
        'dataInterval'         => 'DataInterval',
        'requestId'            => 'RequestId',
        'httpCodeDataInterval' => 'HttpCodeDataInterval',
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
        if (null !== $this->httpCodeDataInterval) {
            $res['HttpCodeDataInterval'] = null !== $this->httpCodeDataInterval ? $this->httpCodeDataInterval->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainHttpCodeDataByLayerResponseBody
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
        if (isset($map['HttpCodeDataInterval'])) {
            $model->httpCodeDataInterval = httpCodeDataInterval::fromMap($map['HttpCodeDataInterval']);
        }

        return $model;
    }
}
