<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallRulesRequest\firewallRules;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallRulesRequest\tag;

class CreateFirewallRulesRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var firewallRules[]
     */
    public $firewallRules;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $regionId;
    /**
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
        if (\is_array($this->firewallRules)) {
            Model::validateArray($this->firewallRules);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->firewallRules) {
            if (\is_array($this->firewallRules)) {
                $res['FirewallRules'] = [];
                $n1                   = 0;
                foreach ($this->firewallRules as $item1) {
                    $res['FirewallRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['FirewallRules'])) {
            if (!empty($map['FirewallRules'])) {
                $model->firewallRules = [];
                $n1                   = 0;
                foreach ($map['FirewallRules'] as $item1) {
                    $model->firewallRules[$n1++] = firewallRules::fromMap($item1);
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
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
