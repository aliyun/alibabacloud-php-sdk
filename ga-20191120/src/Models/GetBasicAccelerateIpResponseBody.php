<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class GetBasicAccelerateIpResponseBody extends Model
{
    /**
     * @var string
     */
    public $accelerateIpAddress;

    /**
     * @var string
     */
    public $accelerateIpId;

    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var string
     */
    public $ipSetId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'accelerateIpAddress' => 'AccelerateIpAddress',
        'accelerateIpId'      => 'AccelerateIpId',
        'acceleratorId'       => 'AcceleratorId',
        'ipSetId'             => 'IpSetId',
        'requestId'           => 'RequestId',
        'state'               => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerateIpAddress) {
            $res['AccelerateIpAddress'] = $this->accelerateIpAddress;
        }
        if (null !== $this->accelerateIpId) {
            $res['AccelerateIpId'] = $this->accelerateIpId;
        }
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->ipSetId) {
            $res['IpSetId'] = $this->ipSetId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBasicAccelerateIpResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerateIpAddress'])) {
            $model->accelerateIpAddress = $map['AccelerateIpAddress'];
        }
        if (isset($map['AccelerateIpId'])) {
            $model->accelerateIpId = $map['AccelerateIpId'];
        }
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['IpSetId'])) {
            $model->ipSetId = $map['IpSetId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
