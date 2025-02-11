<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;

class CreateFirewallRulesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $firewallRuleIds;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'firewallRuleIds' => 'FirewallRuleIds',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->firewallRuleIds)) {
            Model::validateArray($this->firewallRuleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->firewallRuleIds) {
            if (\is_array($this->firewallRuleIds)) {
                $res['FirewallRuleIds'] = [];
                $n1                     = 0;
                foreach ($this->firewallRuleIds as $item1) {
                    $res['FirewallRuleIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FirewallRuleIds'])) {
            if (!empty($map['FirewallRuleIds'])) {
                $model->firewallRuleIds = [];
                $n1                     = 0;
                foreach ($map['FirewallRuleIds'] as $item1) {
                    $model->firewallRuleIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
