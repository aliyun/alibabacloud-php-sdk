<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\PAL7Config;

use AlibabaCloud\Dara\Model;

class dnsConfig extends Model
{
    /**
     * @var string[]
     */
    public $dnsServers;
    protected $_name = [
        'dnsServers' => 'DnsServers',
    ];

    public function validate()
    {
        if (\is_array($this->dnsServers)) {
            Model::validateArray($this->dnsServers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnsServers) {
            if (\is_array($this->dnsServers)) {
                $res['DnsServers'] = [];
                $n1 = 0;
                foreach ($this->dnsServers as $item1) {
                    $res['DnsServers'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['DnsServers'])) {
            if (!empty($map['DnsServers'])) {
                $model->dnsServers = [];
                $n1 = 0;
                foreach ($map['DnsServers'] as $item1) {
                    $model->dnsServers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
