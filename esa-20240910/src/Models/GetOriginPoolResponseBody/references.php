<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginPoolResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginPoolResponseBody\references\dnsRecords;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginPoolResponseBody\references\IPARecords;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginPoolResponseBody\references\loadBalancers;

class references extends Model
{
    /**
     * @var dnsRecords[]
     */
    public $dnsRecords;

    /**
     * @var IPARecords[]
     */
    public $IPARecords;

    /**
     * @var loadBalancers[]
     */
    public $loadBalancers;
    protected $_name = [
        'dnsRecords' => 'DnsRecords',
        'IPARecords' => 'IPARecords',
        'loadBalancers' => 'LoadBalancers',
    ];

    public function validate()
    {
        if (\is_array($this->dnsRecords)) {
            Model::validateArray($this->dnsRecords);
        }
        if (\is_array($this->IPARecords)) {
            Model::validateArray($this->IPARecords);
        }
        if (\is_array($this->loadBalancers)) {
            Model::validateArray($this->loadBalancers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnsRecords) {
            if (\is_array($this->dnsRecords)) {
                $res['DnsRecords'] = [];
                $n1 = 0;
                foreach ($this->dnsRecords as $item1) {
                    $res['DnsRecords'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->IPARecords) {
            if (\is_array($this->IPARecords)) {
                $res['IPARecords'] = [];
                $n1 = 0;
                foreach ($this->IPARecords as $item1) {
                    $res['IPARecords'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->loadBalancers) {
            if (\is_array($this->loadBalancers)) {
                $res['LoadBalancers'] = [];
                $n1 = 0;
                foreach ($this->loadBalancers as $item1) {
                    $res['LoadBalancers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DnsRecords'])) {
            if (!empty($map['DnsRecords'])) {
                $model->dnsRecords = [];
                $n1 = 0;
                foreach ($map['DnsRecords'] as $item1) {
                    $model->dnsRecords[$n1++] = dnsRecords::fromMap($item1);
                }
            }
        }

        if (isset($map['IPARecords'])) {
            if (!empty($map['IPARecords'])) {
                $model->IPARecords = [];
                $n1 = 0;
                foreach ($map['IPARecords'] as $item1) {
                    $model->IPARecords[$n1++] = IPARecords::fromMap($item1);
                }
            }
        }

        if (isset($map['LoadBalancers'])) {
            if (!empty($map['LoadBalancers'])) {
                $model->loadBalancers = [];
                $n1 = 0;
                foreach ($map['LoadBalancers'] as $item1) {
                    $model->loadBalancers[$n1++] = loadBalancers::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
