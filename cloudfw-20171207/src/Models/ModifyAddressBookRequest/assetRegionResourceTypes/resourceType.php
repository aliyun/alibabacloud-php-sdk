<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyAddressBookRequest\assetRegionResourceTypes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyAddressBookRequest\assetRegionResourceTypes\resourceType\ipv4;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyAddressBookRequest\assetRegionResourceTypes\resourceType\ipv6;

class resourceType extends Model
{
    /**
     * @var ipv4
     */
    public $ipv4;

    /**
     * @var ipv6
     */
    public $ipv6;
    protected $_name = [
        'ipv4' => 'Ipv4',
        'ipv6' => 'Ipv6',
    ];

    public function validate()
    {
        if (null !== $this->ipv4) {
            $this->ipv4->validate();
        }
        if (null !== $this->ipv6) {
            $this->ipv6->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv4) {
            $res['Ipv4'] = null !== $this->ipv4 ? $this->ipv4->toArray($noStream) : $this->ipv4;
        }

        if (null !== $this->ipv6) {
            $res['Ipv6'] = null !== $this->ipv6 ? $this->ipv6->toArray($noStream) : $this->ipv6;
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
        if (isset($map['Ipv4'])) {
            $model->ipv4 = ipv4::fromMap($map['Ipv4']);
        }

        if (isset($map['Ipv6'])) {
            $model->ipv6 = ipv6::fromMap($map['Ipv6']);
        }

        return $model;
    }
}
