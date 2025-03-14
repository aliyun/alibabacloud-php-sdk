<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallTemplateRequest\firewallRule;
use AlibabaCloud\Tea\Model;

class CreateFirewallTemplateRequest extends Model
{
    /**
     * @description The description of the firewall template.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The details of the firewall rule.
     *
     * @var firewallRule[]
     */
    public $firewallRule;

    /**
     * @description The name of the firewall template.
     *
     * This parameter is required.
     *
     * @example testName
     *
     * @var string
     */
    public $name;

    /**
     * @description The region ID of the simple application server to which the firewall template belongs. You can call the [ListRegions](https://help.aliyun.com/document_detail/189315.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'description' => 'Description',
        'firewallRule' => 'FirewallRule',
        'name' => 'Name',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->firewallRule) {
            $res['FirewallRule'] = [];
            if (null !== $this->firewallRule && \is_array($this->firewallRule)) {
                $n = 0;
                foreach ($this->firewallRule as $item) {
                    $res['FirewallRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFirewallTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FirewallRule'])) {
            if (!empty($map['FirewallRule'])) {
                $model->firewallRule = [];
                $n = 0;
                foreach ($map['FirewallRule'] as $item) {
                    $model->firewallRule[$n++] = null !== $item ? firewallRule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
