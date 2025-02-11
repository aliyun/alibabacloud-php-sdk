<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallTemplateRulesRequest\firewallRule;

class CreateFirewallTemplateRulesRequest extends Model
{
    /**
     * @var firewallRule[]
     */
    public $firewallRule;
    /**
     * @var string
     */
    public $firewallTemplateId;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'firewallRule'       => 'FirewallRule',
        'firewallTemplateId' => 'FirewallTemplateId',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->firewallRule)) {
            Model::validateArray($this->firewallRule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->firewallRule) {
            if (\is_array($this->firewallRule)) {
                $res['FirewallRule'] = [];
                $n1                  = 0;
                foreach ($this->firewallRule as $item1) {
                    $res['FirewallRule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->firewallTemplateId) {
            $res['FirewallTemplateId'] = $this->firewallTemplateId;
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
        if (isset($map['FirewallRule'])) {
            if (!empty($map['FirewallRule'])) {
                $model->firewallRule = [];
                $n1                  = 0;
                foreach ($map['FirewallRule'] as $item1) {
                    $model->firewallRule[$n1++] = firewallRule::fromMap($item1);
                }
            }
        }

        if (isset($map['FirewallTemplateId'])) {
            $model->firewallTemplateId = $map['FirewallTemplateId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
