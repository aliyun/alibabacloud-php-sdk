<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyResponseBody\defaultAddrPools;

use AlibabaCloud\Tea\Model;

class defaultAddrPool extends Model
{
    /**
     * @description The number of addresses in the address pool.
     *
     * @example 1
     *
     * @var int
     */
    public $addrCount;

    /**
     * @description The ID of the address pool.
     *
     * @example pool1
     *
     * @var string
     */
    public $id;

    /**
     * @description The weight of the address pool.
     *
     * @example 1
     *
     * @var int
     */
    public $lbaWeight;

    /**
     * @description The name of the address pool.
     *
     * @example test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'addrCount' => 'AddrCount',
        'id'        => 'Id',
        'lbaWeight' => 'LbaWeight',
        'name'      => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addrCount) {
            $res['AddrCount'] = $this->addrCount;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lbaWeight) {
            $res['LbaWeight'] = $this->lbaWeight;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return defaultAddrPool
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddrCount'])) {
            $model->addrCount = $map['AddrCount'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LbaWeight'])) {
            $model->lbaWeight = $map['LbaWeight'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
