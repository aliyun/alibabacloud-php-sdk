<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DeleteFirewallV2RoutePoliciesRequest extends Model
{
    /**
     * @example vfw-tr-d5ba592ac6c84aff****
     *
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
     * @example policy-2d06d3568fd74d60****
     *
     * @var string
     */
    public $trFirewallRoutePolicyId;
    protected $_name = [
        'firewallId'              => 'FirewallId',
        'lang'                    => 'Lang',
        'trFirewallRoutePolicyId' => 'TrFirewallRoutePolicyId',
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
        if (null !== $this->trFirewallRoutePolicyId) {
            $res['TrFirewallRoutePolicyId'] = $this->trFirewallRoutePolicyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFirewallV2RoutePoliciesRequest
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
        if (isset($map['TrFirewallRoutePolicyId'])) {
            $model->trFirewallRoutePolicyId = $map['TrFirewallRoutePolicyId'];
        }

        return $model;
    }
}
