<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsGtmAccessStrategyRequest;

use AlibabaCloud\Dara\Model;

class failoverAddrPool extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $lbaWeight;
    protected $_name = [
        'id' => 'Id',
        'lbaWeight' => 'LbaWeight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
