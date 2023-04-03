<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDnsGtmAccessStrategyRequest;

use AlibabaCloud\Tea\Model;

class defaultAddrPool extends Model
{
    /**
     * @description The ID of the address pool in the primary address pool group.
     *
     * @example pool1
     *
     * @var string
     */
    public $id;

    /**
     * @description The weight of the address pool in the primary address pool group.
     *
     * @example 1
     *
     * @var int
     */
    public $lbaWeight;
    protected $_name = [
        'id'        => 'Id',
        'lbaWeight' => 'LbaWeight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lbaWeight) {
            $res['LbaWeight'] = $this->lbaWeight;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LbaWeight'])) {
            $model->lbaWeight = $map['LbaWeight'];
        }

        return $model;
    }
}
