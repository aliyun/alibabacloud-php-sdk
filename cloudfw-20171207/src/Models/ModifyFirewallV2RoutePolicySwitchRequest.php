<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyFirewallV2RoutePolicySwitchRequest extends Model
{
    /**
     * @var string
     */
    public $firewallId;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example false
     *
     * @var string
     */
    public $shouldRecover;

    /**
     * @var string
     */
    public $trFirewallRoutePolicyId;

    /**
     * @example open
     *
     * @var string
     */
    public $trFirewallRoutePolicySwitchStatus;
    protected $_name = [
        'firewallId'                        => 'FirewallId',
        'lang'                              => 'Lang',
        'shouldRecover'                     => 'ShouldRecover',
        'trFirewallRoutePolicyId'           => 'TrFirewallRoutePolicyId',
        'trFirewallRoutePolicySwitchStatus' => 'TrFirewallRoutePolicySwitchStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ModifyFirewallV2RoutePolicySwitchRequest
     */
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
