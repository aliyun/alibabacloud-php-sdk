<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyNatGatewayAttributeRequest;

use AlibabaCloud\Dara\Model;

class ipv6Config extends Model
{
    /**
     * @var bool
     */
    public $ipv6Enabled;
    protected $_name = [
        'ipv6Enabled' => 'Ipv6Enabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv6Enabled) {
            $res['Ipv6Enabled'] = $this->ipv6Enabled;
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
        if (isset($map['Ipv6Enabled'])) {
            $model->ipv6Enabled = $map['Ipv6Enabled'];
        }

        return $model;
    }
}
