<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallTemplateRulesRequest\firewallRule;
use AlibabaCloud\Tea\Model;

class CreateFirewallTemplateRulesRequest extends Model
{
    /**
     * @description The details of the firewall rule.
     *
     * This parameter is required.
     *
     * @var firewallRule[]
     */
    public $firewallRule;

    /**
     * @description The ID of the firewall template.
     *
     * This parameter is required.
     *
     * @example ft-bcf1a7hrdq717****
     *
     * @var string
     */
    public $firewallTemplateId;

    /**
     * @description The region ID of the simple application server to which the firewall template is applied. You can call the [ListRegions](https://help.aliyun.com/document_detail/189315.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'firewallRule' => 'FirewallRule',
        'firewallTemplateId' => 'FirewallTemplateId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->firewallRule) {
            $res['FirewallRule'] = [];
            if (null !== $this->firewallRule && \is_array($this->firewallRule)) {
                $n = 0;
                foreach ($this->firewallRule as $item) {
                    $res['FirewallRule'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return CreateFirewallTemplateRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirewallRule'])) {
            if (!empty($map['FirewallRule'])) {
                $model->firewallRule = [];
                $n = 0;
                foreach ($map['FirewallRule'] as $item) {
                    $model->firewallRule[$n++] = null !== $item ? firewallRule::fromMap($item) : $item;
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
