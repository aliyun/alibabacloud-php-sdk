<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanAvailableConfigResponseBody\instances;

use AlibabaCloud\Tea\Model;

class addrPools extends Model
{
    /**
     * @var string
     */
    public $addrPoolId;

    /**
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
     * @return addrPools
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
