<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateForwardingRulesRequest\forwardingRules;
use AlibabaCloud\Tea\Model;

class UpdateForwardingRulesRequest extends Model
{
    /**
     * @description The GA instance ID.
     *
     * This parameter is required.
     * @example ga-bp17frjjh0udz4q****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 02fb3da4****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The configurations of the forwarding rules.
     *
     * This parameter is required.
     * @example test
     *
     * @var forwardingRules[]
     */
    public $forwardingRules;

    /**
     * @description The listener ID.
     *
     * This parameter is required.
     * @example lsr-bp1s0vzbi5bxlx5****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The region ID of the GA instance. Set the value to **cn-hangzhou**.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'acceleratorId'   => 'AcceleratorId',
        'clientToken'     => 'ClientToken',
        'forwardingRules' => 'ForwardingRules',
        'listenerId'      => 'ListenerId',
        'regionId'        => 'RegionId',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->forwardingRules) {
            $res['ForwardingRules'] = [];
            if (null !== $this->forwardingRules && \is_array($this->forwardingRules)) {
                $n = 0;
                foreach ($this->forwardingRules as $item) {
                    $res['ForwardingRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateForwardingRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ForwardingRules'])) {
            if (!empty($map['ForwardingRules'])) {
                $model->forwardingRules = [];
                $n                      = 0;
                foreach ($map['ForwardingRules'] as $item) {
                    $model->forwardingRules[$n++] = null !== $item ? forwardingRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
