<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class DescribeAcceleratorAutoRenewAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var int
     */
    public $autoRenewDuration;

    /**
     * @var string
     */
    public $renewalStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'acceleratorId'     => 'AcceleratorId',
        'autoRenew'         => 'AutoRenew',
        'autoRenewDuration' => 'AutoRenewDuration',
        'renewalStatus'     => 'RenewalStatus',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewDuration) {
            $res['AutoRenewDuration'] = $this->autoRenewDuration;
        }
        if (null !== $this->renewalStatus) {
            $res['RenewalStatus'] = $this->renewalStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAcceleratorAutoRenewAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewDuration'])) {
            $model->autoRenewDuration = $map['AutoRenewDuration'];
        }
        if (isset($map['RenewalStatus'])) {
            $model->renewalStatus = $map['RenewalStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
