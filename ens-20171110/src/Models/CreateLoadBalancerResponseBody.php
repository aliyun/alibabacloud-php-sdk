<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateLoadBalancerResponseBody extends Model
{
    /**
     * @description The ID of the ELB instance.
     *
     * @example lb-5s7crik3yo3bp03gqrbp5****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The name of the ELB instance.
     *
     * @example gcs-pre-websocket-****
     *
     * @var string
     */
    public $loadBalancerName;

    /**
     * @description The ID of the network.
     *
     * @example n-5sax03dh2eyagujgsn7z9****
     *
     * @var string
     */
    public $networkId;

    /**
     * @description The ID of the request.
     *
     * @example 1ECC937A-AE0E-4626-BE51-DED1D6D1C888
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the vSwitch to which the ELB instance belongs.
     *
     * @example vsw-5savh5ngxh8sbj14bu7n****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'loadBalancerId'   => 'LoadBalancerId',
        'loadBalancerName' => 'LoadBalancerName',
        'networkId'        => 'NetworkId',
        'requestId'        => 'RequestId',
        'vSwitchId'        => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLoadBalancerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
