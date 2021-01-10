<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\RunFunctionResponseBody;

use AlibabaCloud\Tea\Model;

class runtimeMeta extends Model
{
    /**
     * @var int
     */
    public $invocationDuration;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $billingDuration;

    /**
     * @var int
     */
    public $maxMemoryUsage;
    protected $_name = [
        'invocationDuration' => 'InvocationDuration',
        'requestId'          => 'RequestId',
        'billingDuration'    => 'BillingDuration',
        'maxMemoryUsage'     => 'MaxMemoryUsage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invocationDuration) {
            $res['InvocationDuration'] = $this->invocationDuration;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->billingDuration) {
            $res['BillingDuration'] = $this->billingDuration;
        }
        if (null !== $this->maxMemoryUsage) {
            $res['MaxMemoryUsage'] = $this->maxMemoryUsage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runtimeMeta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvocationDuration'])) {
            $model->invocationDuration = $map['InvocationDuration'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BillingDuration'])) {
            $model->billingDuration = $map['BillingDuration'];
        }
        if (isset($map['MaxMemoryUsage'])) {
            $model->maxMemoryUsage = $map['MaxMemoryUsage'];
        }

        return $model;
    }
}
