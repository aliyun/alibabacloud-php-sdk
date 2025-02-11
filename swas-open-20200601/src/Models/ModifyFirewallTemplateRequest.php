<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ModifyFirewallTemplateRequest\firewallTemplateRule;

class ModifyFirewallTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $firewallTemplateId;
    /**
     * @var firewallTemplateRule[]
     */
    public $firewallTemplateRule;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'description'          => 'Description',
        'firewallTemplateId'   => 'FirewallTemplateId',
        'firewallTemplateRule' => 'FirewallTemplateRule',
        'name'                 => 'Name',
        'regionId'             => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->firewallTemplateRule)) {
            Model::validateArray($this->firewallTemplateRule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->firewallTemplateRule)) {
                $res['FirewallTemplateRule'] = [];
                $n1                          = 0;
                foreach ($this->firewallTemplateRule as $item1) {
                    $res['FirewallTemplateRule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1                          = 0;
                foreach ($map['FirewallTemplateRule'] as $item1) {
                    $model->firewallTemplateRule[$n1++] = firewallTemplateRule::fromMap($item1);
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
