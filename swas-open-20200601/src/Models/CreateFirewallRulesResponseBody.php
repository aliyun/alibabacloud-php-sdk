<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class CreateFirewallRulesResponseBody extends Model
{
    /**
     * @description The IDs of the firewall rules that you created.
     *
     * @var string[]
     */
    public $firewallRuleIds;

    /**
     * @description The request ID.
     *
     * @example 20758A-585D-4A41-A9B2-28DA8F4F534F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'firewallRuleIds' => 'FirewallRuleIds',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->firewallRuleIds) {
            $res['FirewallRuleIds'] = $this->firewallRuleIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFirewallRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirewallRuleIds'])) {
            if (!empty($map['FirewallRuleIds'])) {
                $model->firewallRuleIds = $map['FirewallRuleIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
