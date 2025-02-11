<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;

class DeleteFirewallTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string[]
     */
    public $firewallTemplateId;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken'        => 'ClientToken',
        'firewallTemplateId' => 'FirewallTemplateId',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->firewallTemplateId)) {
            Model::validateArray($this->firewallTemplateId);
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
            if (\is_array($this->firewallTemplateId)) {
                $res['FirewallTemplateId'] = [];
                $n1                        = 0;
                foreach ($this->firewallTemplateId as $item1) {
                    $res['FirewallTemplateId'][$n1++] = $item1;
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
            if (!empty($map['FirewallTemplateId'])) {
                $model->firewallTemplateId = [];
                $n1                        = 0;
                foreach ($map['FirewallTemplateId'] as $item1) {
                    $model->firewallTemplateId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
