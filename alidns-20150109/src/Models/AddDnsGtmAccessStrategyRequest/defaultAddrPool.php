<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsGtmAccessStrategyRequest;

use AlibabaCloud\Tea\Model;

class defaultAddrPool extends Model
{
    /**
     * @var int
     */
    public $lbaWeight;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'lbaWeight' => 'LbaWeight',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['LbaWeight'])) {
            $model->lbaWeight = $map['LbaWeight'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
