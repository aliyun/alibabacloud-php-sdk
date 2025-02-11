<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallTemplateRulesResponseBody\firewallTemplateRules;

class CreateFirewallTemplateRulesResponseBody extends Model
{
    /**
     * @var firewallTemplateRules[]
     */
    public $firewallTemplateRules;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'firewallTemplateRules' => 'FirewallTemplateRules',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->firewallTemplateRules)) {
            Model::validateArray($this->firewallTemplateRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->firewallTemplateRules) {
            if (\is_array($this->firewallTemplateRules)) {
                $res['FirewallTemplateRules'] = [];
                $n1                           = 0;
                foreach ($this->firewallTemplateRules as $item1) {
                    $res['FirewallTemplateRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FirewallTemplateRules'])) {
            if (!empty($map['FirewallTemplateRules'])) {
                $model->firewallTemplateRules = [];
                $n1                           = 0;
                foreach ($map['FirewallTemplateRules'] as $item1) {
                    $model->firewallTemplateRules[$n1++] = firewallTemplateRules::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
