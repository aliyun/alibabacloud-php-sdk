<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class ModifyFirewallV2RoutePolicySwitchRequest extends Model
{
    /**
     * @var string
     */
    public $firewallId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $shouldRecover;

    /**
     * @var string
     */
    public $trFirewallRoutePolicyId;

    /**
     * @var string
     */
    public $trFirewallRoutePolicySwitchStatus;
    protected $_name = [
        'firewallId' => 'FirewallId',
        'lang' => 'Lang',
        'shouldRecover' => 'ShouldRecover',
        'trFirewallRoutePolicyId' => 'TrFirewallRoutePolicyId',
        'trFirewallRoutePolicySwitchStatus' => 'TrFirewallRoutePolicySwitchStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->firewallId) {
            $res['FirewallId'] = $this->firewallId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->shouldRecover) {
            $res['ShouldRecover'] = $this->shouldRecover;
        }

        if (null !== $this->trFirewallRoutePolicyId) {
            $res['TrFirewallRoutePolicyId'] = $this->trFirewallRoutePolicyId;
        }

        if (null !== $this->trFirewallRoutePolicySwitchStatus) {
            $res['TrFirewallRoutePolicySwitchStatus'] = $this->trFirewallRoutePolicySwitchStatus;
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
        if (isset($map['FirewallId'])) {
            $model->firewallId = $map['FirewallId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ShouldRecover'])) {
            $model->shouldRecover = $map['ShouldRecover'];
        }

        if (isset($map['TrFirewallRoutePolicyId'])) {
            $model->trFirewallRoutePolicyId = $map['TrFirewallRoutePolicyId'];
        }

        if (isset($map['TrFirewallRoutePolicySwitchStatus'])) {
            $model->trFirewallRoutePolicySwitchStatus = $map['TrFirewallRoutePolicySwitchStatus'];
        }

        return $model;
    }
}
