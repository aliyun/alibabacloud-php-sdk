<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallRulesRequest\firewallRules;
use AlibabaCloud\Tea\Model;

class CreateFirewallRulesRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var firewallRules[]
     */
    public $firewallRules;

    /**
     * @example ace0706b2ac4454d984295a94213****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken'   => 'ClientToken',
        'firewallRules' => 'FirewallRules',
        'instanceId'    => 'InstanceId',
        'regionId'      => 'RegionId',
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

        return $model;
    }
}
