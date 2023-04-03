<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDnsGtmAddressPoolRequest\addr;
use AlibabaCloud\Tea\Model;

class UpdateDnsGtmAddressPoolRequest extends Model
{
    /**
     * @description The addresses in the address pool.
     *
     * @var addr[]
     */
    public $addr;

    /**
     * @description The ID of the address pool.
     *
     * @example testpool1
     *
     * @var string
     */
    public $addrPoolId;

    /**
     * @description The language of the values of specific response parameters. Default value: en. Valid values: en, zh, and ja.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The load balancing policy for the address pool. Valid values:
     *
     *   ALL_RR: returns all addresses.
     *   RATIO: returns addresses by weight.
     *
     * @example all_rr
     *
     * @var string
     */
    public $lbaStrategy;

    /**
     * @description The name of the address pool.
     *
     * @example testpoolname
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'addr'        => 'Addr',
        'addrPoolId'  => 'AddrPoolId',
        'lang'        => 'Lang',
        'lbaStrategy' => 'LbaStrategy',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addr) {
            $res['Addr'] = [];
            if (null !== $this->addr && \is_array($this->addr)) {
                $n = 0;
                foreach ($this->addr as $item) {
                    $res['Addr'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->addrPoolId) {
            $res['AddrPoolId'] = $this->addrPoolId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->lbaStrategy) {
            $res['LbaStrategy'] = $this->lbaStrategy;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDnsGtmAddressPoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Addr'])) {
            if (!empty($map['Addr'])) {
                $model->addr = [];
                $n           = 0;
                foreach ($map['Addr'] as $item) {
                    $model->addr[$n++] = null !== $item ? addr::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AddrPoolId'])) {
            $model->addrPoolId = $map['AddrPoolId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['LbaStrategy'])) {
            $model->lbaStrategy = $map['LbaStrategy'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
