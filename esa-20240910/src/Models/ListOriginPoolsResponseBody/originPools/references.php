<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListOriginPoolsResponseBody\originPools;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListOriginPoolsResponseBody\originPools\references\dnsRecords;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListOriginPoolsResponseBody\originPools\references\IPARecords;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListOriginPoolsResponseBody\originPools\references\loadBalancers;
use AlibabaCloud\Tea\Model;

class references extends Model
{
    /**
     * @description 使用此源地址池为源站的七层记录列表。
     *
     * @var dnsRecords[]
     */
    public $dnsRecords;

    /**
     * @description List of layer 4 records that use this origin pool as the origin.
     *
     * @var IPARecords[]
     */
    public $IPARecords;

    /**
     * @description List of load balancers using this origin pool.
     *
     * @var loadBalancers[]
     */
    public $loadBalancers;
    protected $_name = [
        'dnsRecords' => 'DnsRecords',
        'IPARecords' => 'IPARecords',
        'loadBalancers' => 'LoadBalancers',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsRecords) {
            $res['DnsRecords'] = [];
            if (null !== $this->dnsRecords && \is_array($this->dnsRecords)) {
                $n = 0;
                foreach ($this->dnsRecords as $item) {
                    $res['DnsRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->IPARecords) {
            $res['IPARecords'] = [];
            if (null !== $this->IPARecords && \is_array($this->IPARecords)) {
                $n = 0;
                foreach ($this->IPARecords as $item) {
                    $res['IPARecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->loadBalancers) {
            $res['LoadBalancers'] = [];
            if (null !== $this->loadBalancers && \is_array($this->loadBalancers)) {
                $n = 0;
                foreach ($this->loadBalancers as $item) {
                    $res['LoadBalancers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return references
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsRecords'])) {
            if (!empty($map['DnsRecords'])) {
                $model->dnsRecords = [];
                $n = 0;
                foreach ($map['DnsRecords'] as $item) {
                    $model->dnsRecords[$n++] = null !== $item ? dnsRecords::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IPARecords'])) {
            if (!empty($map['IPARecords'])) {
                $model->IPARecords = [];
                $n = 0;
                foreach ($map['IPARecords'] as $item) {
                    $model->IPARecords[$n++] = null !== $item ? IPARecords::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LoadBalancers'])) {
            if (!empty($map['LoadBalancers'])) {
                $model->loadBalancers = [];
                $n = 0;
                foreach ($map['LoadBalancers'] as $item) {
                    $model->loadBalancers[$n++] = null !== $item ? loadBalancers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
