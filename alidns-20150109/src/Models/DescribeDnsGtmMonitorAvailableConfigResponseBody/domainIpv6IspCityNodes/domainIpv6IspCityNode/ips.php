<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody\domainIpv6IspCityNodes\domainIpv6IspCityNode;

use AlibabaCloud\Dara\Model;

class ips extends Model
{
    /**
     * @var string[]
     */
    public $ip;
    protected $_name = [
        'ip' => 'ip',
    ];

    public function validate()
    {
        if (\is_array($this->ip)) {
            Model::validateArray($this->ip);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ip) {
            if (\is_array($this->ip)) {
                $res['ip'] = [];
                $n1        = 0;
                foreach ($this->ip as $item1) {
                    $res['ip'][$n1++] = $item1;
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
        if (isset($map['ip'])) {
            if (!empty($map['ip'])) {
                $model->ip = [];
                $n1        = 0;
                foreach ($map['ip'] as $item1) {
                    $model->ip[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
