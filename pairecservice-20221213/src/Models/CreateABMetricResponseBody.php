<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateABMetricResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $ABMetricId;

    /**
     * @example F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ABMetricId' => 'ABMetricId',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ABMetricId) {
            $res['ABMetricId'] = $this->ABMetricId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateABMetricResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ABMetricId'])) {
            $model->ABMetricId = $map['ABMetricId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
