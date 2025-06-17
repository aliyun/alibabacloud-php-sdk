<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainHttpCodeDataByLayerResponseBody\httpCodeDataInterval;

class DescribeDomainHttpCodeDataByLayerResponseBody extends Model
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
        'dataInterval' => 'DataInterval',
        'httpCodeDataInterval' => 'HttpCodeDataInterval',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->httpCodeDataInterval) {
            $this->httpCodeDataInterval->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }

        if (null !== $this->httpCodeDataInterval) {
            $res['HttpCodeDataInterval'] = null !== $this->httpCodeDataInterval ? $this->httpCodeDataInterval->toArray($noStream) : $this->httpCodeDataInterval;
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
