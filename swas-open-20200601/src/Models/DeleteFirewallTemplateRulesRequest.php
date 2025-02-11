<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;

class DeleteFirewallTemplateRulesRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $firewallTemplateId;
    /**
     * @var string[]
     */
    public $firewallTemplateRuleId;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken'            => 'ClientToken',
        'firewallTemplateId'     => 'FirewallTemplateId',
        'firewallTemplateRuleId' => 'FirewallTemplateRuleId',
        'regionId'               => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->firewallTemplateRuleId)) {
            Model::validateArray($this->firewallTemplateRuleId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->firewallTemplateId) {
            $res['FirewallTemplateId'] = $this->firewallTemplateId;
        }

        if (null !== $this->firewallTemplateRuleId) {
            if (\is_array($this->firewallTemplateRuleId)) {
                $res['FirewallTemplateRuleId'] = [];
                $n1                            = 0;
                foreach ($this->firewallTemplateRuleId as $item1) {
                    $res['FirewallTemplateRuleId'][$n1++] = $item1;
                }
            }
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['FirewallTemplateId'])) {
            $model->firewallTemplateId = $map['FirewallTemplateId'];
        }

        if (isset($map['FirewallTemplateRuleId'])) {
            if (!empty($map['FirewallTemplateRuleId'])) {
                $model->firewallTemplateRuleId = [];
                $n1                            = 0;
                foreach ($map['FirewallTemplateRuleId'] as $item1) {
                    $model->firewallTemplateRuleId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
