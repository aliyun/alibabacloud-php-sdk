<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyResponseBody;

use AlibabaCloud\Tea\Model;

class defaultAddrPools extends Model
{
    /**
     * @var int
     */
    public $lbaWeight;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $addrCount;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'lbaWeight' => 'LbaWeight',
        'name'      => 'Name',
        'addrCount' => 'AddrCount',
        'id'        => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lbaWeight) {
            $res['LbaWeight'] = $this->lbaWeight;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->addrCount) {
            $res['AddrCount'] = $this->addrCount;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return defaultAddrPools
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LbaWeight'])) {
            $model->lbaWeight = $map['LbaWeight'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['AddrCount'])) {
            $model->addrCount = $map['AddrCount'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
