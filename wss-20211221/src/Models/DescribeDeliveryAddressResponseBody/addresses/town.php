<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeliveryAddressResponseBody\addresses;

use AlibabaCloud\Dara\Model;

class town extends Model
{
    /**
     * @var int
     */
    public $townId;
    /**
     * @var string
     */
    public $townName;
    protected $_name = [
        'townId'   => 'TownId',
        'townName' => 'TownName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->townId) {
            $res['TownId'] = $this->townId;
        }

        if (null !== $this->townName) {
            $res['TownName'] = $this->townName;
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
        if (isset($map['TownId'])) {
            $model->townId = $map['TownId'];
        }

        if (isset($map['TownName'])) {
            $model->townName = $map['TownName'];
        }

        return $model;
    }
}
