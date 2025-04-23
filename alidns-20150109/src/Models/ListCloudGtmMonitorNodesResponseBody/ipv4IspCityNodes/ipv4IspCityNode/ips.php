<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmMonitorNodesResponseBody\ipv4IspCityNodes\ipv4IspCityNode;

use AlibabaCloud\Dara\Model;

class ips extends Model
{
    /**
     * @var string[]
     */
    public $ip;
    protected $_name = [
        'ip' => 'Ip',
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
                $res['Ip'] = [];
                $n1 = 0;
                foreach ($this->ip as $item1) {
                    $res['Ip'][$n1++] = $item1;
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
        if (isset($map['Ip'])) {
            if (!empty($map['Ip'])) {
                $model->ip = [];
                $n1 = 0;
                foreach ($map['Ip'] as $item1) {
                    $model->ip[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
