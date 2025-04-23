<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainNsResponseBody;

use AlibabaCloud\Dara\Model;

class expectDnsServers extends Model
{
    /**
     * @var string[]
     */
    public $expectDnsServer;
    protected $_name = [
        'expectDnsServer' => 'ExpectDnsServer',
    ];

    public function validate()
    {
        if (\is_array($this->expectDnsServer)) {
            Model::validateArray($this->expectDnsServer);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expectDnsServer) {
            if (\is_array($this->expectDnsServer)) {
                $res['ExpectDnsServer'] = [];
                $n1 = 0;
                foreach ($this->expectDnsServer as $item1) {
                    $res['ExpectDnsServer'][$n1++] = $item1;
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
        if (isset($map['ExpectDnsServer'])) {
            if (!empty($map['ExpectDnsServer'])) {
                $model->expectDnsServer = [];
                $n1 = 0;
                foreach ($map['ExpectDnsServer'] as $item1) {
                    $model->expectDnsServer[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
