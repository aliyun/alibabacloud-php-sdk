<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainHttpCodeDataByLayerResponseBody\httpCodeDataInterval;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainHttpCodeDataByLayerResponseBody extends Model
{
    /**
     * @var string
     */
    public $dataInterval;

    /**
     * @var httpCodeDataInterval
     */
    public $httpCodeDataInterval;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataInterval'         => 'DataInterval',
        'httpCodeDataInterval' => 'HttpCodeDataInterval',
        'requestId'            => 'RequestId',
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
        if (null !== $this->httpCodeDataInterval) {
            $res['HttpCodeDataInterval'] = null !== $this->httpCodeDataInterval ? $this->httpCodeDataInterval->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnDomainHttpCodeDataByLayerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['HttpCodeDataInterval'])) {
            $model->httpCodeDataInterval = httpCodeDataInterval::fromMap($map['HttpCodeDataInterval']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
