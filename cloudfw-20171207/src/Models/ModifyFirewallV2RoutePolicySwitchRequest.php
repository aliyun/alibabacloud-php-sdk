<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyFirewallV2RoutePolicySwitchRequest extends Model
{
    /**
     * @description The instance ID of the virtual private cloud (VPC) firewall.
     *
     * @example vfw-tr-5b202e7f0be64611****
     *
     * @var string
     */
    public $firewallId;

    /**
     * @description The language of the content within the response. Valid values:
     *
     *   **zh** (default): Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description Specifies whether to restore the traffic redirection configurations. Valid values:
     *
     *   true: roll back
     *   false: withdraw
     *
     * @example false
     *
     * @var string
     */
    public $shouldRecover;

    /**
     * @description The ID of the routing policy.
     *
     * @example policy-93684cc5caa44b2e****
     *
     * @var string
     */
    public $trFirewallRoutePolicyId;

    /**
     * @description The status of the routing policy. Valid values:
     *
     *   open: enabled
     *   close: disabled
     *
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
