<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallTemplateRequest\firewallRule;

class CreateFirewallTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var firewallRule[]
     */
    public $firewallRule;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'description'  => 'Description',
        'firewallRule' => 'FirewallRule',
        'name'         => 'Name',
        'regionId'     => 'RegionId',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->firewallRule) {
            if (\is_array($this->firewallRule)) {
                $res['FirewallRule'] = [];
                $n1                  = 0;
                foreach ($this->firewallRule as $item1) {
                    $res['FirewallRule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FirewallRule'])) {
            if (!empty($map['FirewallRule'])) {
                $model->firewallRule = [];
                $n1                  = 0;
                foreach ($map['FirewallRule'] as $item1) {
                    $model->firewallRule[$n1++] = firewallRule::fromMap($item1);
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
