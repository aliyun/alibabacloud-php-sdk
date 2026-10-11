<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models\AddIpAddressesToEgressProxyIpPoolRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\AddIpAddressesToEgressProxyIpPoolRequest\zoneMappings\ipAddresses;

class zoneMappings extends Model
{
    /**
     * @var ipAddresses[]
     */
    public $ipAddresses;

    /**
     * @var int
     */
    public $ipCount;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'ipAddresses' => 'IpAddresses',
        'ipCount' => 'IpCount',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->ipAddresses)) {
            Model::validateArray($this->ipAddresses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipAddresses) {
            if (\is_array($this->ipAddresses)) {
                $res['IpAddresses'] = [];
                $n1 = 0;
                foreach ($this->ipAddresses as $item1) {
                    $res['IpAddresses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ipCount) {
            $res['IpCount'] = $this->ipCount;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['IpAddresses'])) {
            if (!empty($map['IpAddresses'])) {
                $model->ipAddresses = [];
                $n1 = 0;
                foreach ($map['IpAddresses'] as $item1) {
                    $model->ipAddresses[$n1] = ipAddresses::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IpCount'])) {
            $model->ipCount = $map['IpCount'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
