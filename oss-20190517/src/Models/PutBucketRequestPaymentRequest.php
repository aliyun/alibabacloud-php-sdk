<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class PutBucketRequestPaymentRequest extends Model
{
    /**
     * @var RequestPaymentConfiguration
     */
    public $requestPaymentConfiguration;
    protected $_name = [
        'requestPaymentConfiguration' => 'RequestPaymentConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestPaymentConfiguration) {
            $res['RequestPaymentConfiguration'] = null !== $this->requestPaymentConfiguration ? $this->requestPaymentConfiguration->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutBucketRequestPaymentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestPaymentConfiguration'])) {
            $model->requestPaymentConfiguration = RequestPaymentConfiguration::fromMap($map['RequestPaymentConfiguration']);
        }

        return $model;
    }
}
