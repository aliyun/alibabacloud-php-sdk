<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ModifyFirewallTemplateRequest\firewallTemplateRule;
use AlibabaCloud\Tea\Model;

class ModifyFirewallTemplateRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The **token** can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](https://help.aliyun.com/document_detail/25693.html).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the firewall template.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the firewall template.
     *
     * This parameter is required.
     * @example ft-bcf1a7hrdq717****
     *
     * @var string
     */
    public $firewallTemplateId;

    /**
     * @description The firewall rule in the template.
     *
     * @var firewallTemplateRule[]
     */
    public $firewallTemplateRule;

    /**
     * @description The ID of the simple application server to which the firewall template is applied.
     *
     * @example 2ad1ae67295445f598017499dc****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the firewall template.
     *
     * @example testName
     *
     * @var string
     */
    public $name;

    /**
     * @description The region ID of the simple application server. You can call the [ListRegions](https://help.aliyun.com/document_detail/189315.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'description'          => 'Description',
        'firewallTemplateId'   => 'FirewallTemplateId',
        'firewallTemplateRule' => 'FirewallTemplateRule',
        'instanceId'           => 'InstanceId',
        'name'                 => 'Name',
        'regionId'             => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->firewallTemplateId) {
            $res['FirewallTemplateId'] = $this->firewallTemplateId;
        }
        if (null !== $this->firewallTemplateRule) {
            $res['FirewallTemplateRule'] = [];
            if (null !== $this->firewallTemplateRule && \is_array($this->firewallTemplateRule)) {
                $n = 0;
                foreach ($this->firewallTemplateRule as $item) {
                    $res['FirewallTemplateRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
     * @return ModifyFirewallTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FirewallTemplateId'])) {
            $model->firewallTemplateId = $map['FirewallTemplateId'];
        }
        if (isset($map['FirewallTemplateRule'])) {
            if (!empty($map['FirewallTemplateRule'])) {
                $model->firewallTemplateRule = [];
                $n                           = 0;
                foreach ($map['FirewallTemplateRule'] as $item) {
                    $model->firewallTemplateRule[$n++] = null !== $item ? firewallTemplateRule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
