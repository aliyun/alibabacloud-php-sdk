<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListSuccessInstanceAmountResponseBody\instanceStatusTrend;
use AlibabaCloud\Tea\Model;

class ListSuccessInstanceAmountResponseBody extends Model
{
    /**
     * @var instanceStatusTrend
     */
    public $instanceStatusTrend;

    /**
     * @example 952795279527ab****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceStatusTrend' => 'InstanceStatusTrend',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceStatusTrend) {
            $res['InstanceStatusTrend'] = null !== $this->instanceStatusTrend ? $this->instanceStatusTrend->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSuccessInstanceAmountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceStatusTrend'])) {
            $model->instanceStatusTrend = instanceStatusTrend::fromMap($map['InstanceStatusTrend']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
