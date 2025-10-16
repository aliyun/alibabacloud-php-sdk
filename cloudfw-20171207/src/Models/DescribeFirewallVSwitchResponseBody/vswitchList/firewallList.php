<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeFirewallVSwitchResponseBody\vswitchList;

use AlibabaCloud\Dara\Model;

class firewallList extends Model
{
    /**
     * @var string
     */
    public $firewallId;

    /**
     * @var string
     */
    public $firewallName;
    protected $_name = [
        'firewallId' => 'FirewallId',
        'firewallName' => 'FirewallName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->firewallId) {
            $res['FirewallId'] = $this->firewallId;
        }

        if (null !== $this->firewallName) {
            $res['FirewallName'] = $this->firewallName;
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
        if (isset($map['FirewallId'])) {
            $model->firewallId = $map['FirewallId'];
        }

        if (isset($map['FirewallName'])) {
            $model->firewallName = $map['FirewallName'];
        }

        return $model;
    }
}
