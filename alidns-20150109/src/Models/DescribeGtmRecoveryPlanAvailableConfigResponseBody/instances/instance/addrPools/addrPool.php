<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanAvailableConfigResponseBody\instances\instance\addrPools;

use AlibabaCloud\Tea\Model;

class addrPool extends Model
{
    /**
     * @description The ID of the address pool.
     *
     * @var string
     */
    public $addrPoolId;

    /**
     * @description The name of the address pool.
     *
     * @example hra0i9
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'addrPoolId' => 'AddrPoolId',
        'name'       => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addrPoolId) {
            $res['AddrPoolId'] = $this->addrPoolId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addrPool
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddrPoolId'])) {
            $model->addrPoolId = $map['AddrPoolId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
