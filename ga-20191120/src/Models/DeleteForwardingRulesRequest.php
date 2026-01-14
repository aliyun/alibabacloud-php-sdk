<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;

class DeleteForwardingRulesRequest extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string[]
     */
    public $forwardingRuleIds;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'acceleratorId' => 'AcceleratorId',
        'clientToken' => 'ClientToken',
        'forwardingRuleIds' => 'ForwardingRuleIds',
        'listenerId' => 'ListenerId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->forwardingRuleIds)) {
            Model::validateArray($this->forwardingRuleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->forwardingRuleIds) {
            if (\is_array($this->forwardingRuleIds)) {
                $res['ForwardingRuleIds'] = [];
                $n1 = 0;
                foreach ($this->forwardingRuleIds as $item1) {
                    $res['ForwardingRuleIds'][$n1] = $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ForwardingRuleIds'])) {
            if (!empty($map['ForwardingRuleIds'])) {
                $model->forwardingRuleIds = [];
                $n1 = 0;
                foreach ($map['ForwardingRuleIds'] as $item1) {
                    $model->forwardingRuleIds[$n1] = $item1;
                    ++$n1;
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
