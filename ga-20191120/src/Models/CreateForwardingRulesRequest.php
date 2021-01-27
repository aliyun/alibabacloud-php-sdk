<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateForwardingRulesRequest\forwardingRules;
use AlibabaCloud\Tea\Model;

class CreateForwardingRulesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var forwardingRules[]
     */
    public $forwardingRules;
    protected $_name = [
        'regionId'        => 'RegionId',
        'clientToken'     => 'ClientToken',
        'acceleratorId'   => 'AcceleratorId',
        'listenerId'      => 'ListenerId',
        'forwardingRules' => 'ForwardingRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateForwardingRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
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

        return $model;
    }
}
