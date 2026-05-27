<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class UnassignWuyingServerPrivateAddressesRequest extends Model
{
    /**
     * @var string[]
     */
    public $privateIpAddresses;

    /**
     * @var string
     */
    public $wuyingServerId;
    protected $_name = [
        'privateIpAddresses' => 'PrivateIpAddresses',
        'wuyingServerId' => 'WuyingServerId',
    ];

    public function validate()
    {
        if (\is_array($this->privateIpAddresses)) {
            Model::validateArray($this->privateIpAddresses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->privateIpAddresses) {
            if (\is_array($this->privateIpAddresses)) {
                $res['PrivateIpAddresses'] = [];
                $n1 = 0;
                foreach ($this->privateIpAddresses as $item1) {
                    $res['PrivateIpAddresses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->wuyingServerId) {
            $res['WuyingServerId'] = $this->wuyingServerId;
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
        if (isset($map['PrivateIpAddresses'])) {
            if (!empty($map['PrivateIpAddresses'])) {
                $model->privateIpAddresses = [];
                $n1 = 0;
                foreach ($map['PrivateIpAddresses'] as $item1) {
                    $model->privateIpAddresses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WuyingServerId'])) {
            $model->wuyingServerId = $map['WuyingServerId'];
        }

        return $model;
    }
}
