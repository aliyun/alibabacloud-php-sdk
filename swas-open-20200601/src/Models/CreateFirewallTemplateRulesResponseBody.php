<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallTemplateRulesResponseBody\firewallTemplateRules;
use AlibabaCloud\Tea\Model;

class CreateFirewallTemplateRulesResponseBody extends Model
{
    /**
     * @description The firewall template rules.
     *
     * @var firewallTemplateRules[]
     */
    public $firewallTemplateRules;

    /**
     * @description The request ID.
     *
     * @example 30637AD6-D977-4833-A54C-CC89483E****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'firewallTemplateRules' => 'FirewallTemplateRules',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->firewallTemplateRules) {
            $res['FirewallTemplateRules'] = [];
            if (null !== $this->firewallTemplateRules && \is_array($this->firewallTemplateRules)) {
                $n = 0;
                foreach ($this->firewallTemplateRules as $item) {
                    $res['FirewallTemplateRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFirewallTemplateRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirewallTemplateRules'])) {
            if (!empty($map['FirewallTemplateRules'])) {
                $model->firewallTemplateRules = [];
                $n = 0;
                foreach ($map['FirewallTemplateRules'] as $item) {
                    $model->firewallTemplateRules[$n++] = null !== $item ? firewallTemplateRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
