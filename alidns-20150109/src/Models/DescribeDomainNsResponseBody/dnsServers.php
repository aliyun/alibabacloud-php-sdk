<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainNsResponseBody;

use AlibabaCloud\Dara\Model;

class dnsServers extends Model
{
    /**
     * @var string[]
     */
    public $dnsServer;
    protected $_name = [
        'dnsServer' => 'DnsServer',
    ];

    public function validate()
    {
        if (\is_array($this->dnsServer)) {
            Model::validateArray($this->dnsServer);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnsServer) {
            if (\is_array($this->dnsServer)) {
                $res['DnsServer'] = [];
                $n1 = 0;
                foreach ($this->dnsServer as $item1) {
                    $res['DnsServer'][$n1++] = $item1;
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
        if (isset($map['DnsServer'])) {
            if (!empty($map['DnsServer'])) {
                $model->dnsServer = [];
                $n1 = 0;
                foreach ($map['DnsServer'] as $item1) {
                    $model->dnsServer[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
