<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListSuccessInstanceAmountResponseBody\instanceStatusTrend;

class ListSuccessInstanceAmountResponseBody extends Model
{
    /**
     * @var instanceStatusTrend
     */
    public $instanceStatusTrend;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceStatusTrend' => 'InstanceStatusTrend',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceStatusTrend) {
            $this->instanceStatusTrend->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceStatusTrend) {
            $res['InstanceStatusTrend'] = null !== $this->instanceStatusTrend ? $this->instanceStatusTrend->toArray($noStream) : $this->instanceStatusTrend;
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
        if (isset($map['InstanceStatusTrend'])) {
            $model->instanceStatusTrend = instanceStatusTrend::fromMap($map['InstanceStatusTrend']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
