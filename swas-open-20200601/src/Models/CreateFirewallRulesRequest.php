<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallRulesRequest\firewallRules;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallRulesRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateFirewallRulesRequest extends Model
{
    /**
     * @description The client token.
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Details about the firewall rules.
     *
     * @var firewallRules[]
     */
    public $firewallRules;

    /**
     * @description The ID of the simple application server.
     *
     * This parameter is required.
     * @example ace0706b2ac4454d984295a94213****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the simple application server. You can call the [ListRegions](https://help.aliyun.com/document_detail/189315.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The tags that you want to add to the firewall. You can specify up to 20 tags.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'clientToken'   => 'ClientToken',
        'firewallRules' => 'FirewallRules',
        'instanceId'    => 'InstanceId',
        'regionId'      => 'RegionId',
        'tag'           => 'Tag',
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
        if (null !== $this->firewallRules) {
            $res['FirewallRules'] = [];
            if (null !== $this->firewallRules && \is_array($this->firewallRules)) {
                $n = 0;
                foreach ($this->firewallRules as $item) {
                    $res['FirewallRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFirewallRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['FirewallRules'])) {
            if (!empty($map['FirewallRules'])) {
                $model->firewallRules = [];
                $n                    = 0;
                foreach ($map['FirewallRules'] as $item) {
                    $model->firewallRules[$n++] = null !== $item ? firewallRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
