<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeliveryAddressResponseBody\addresses;

use AlibabaCloud\Tea\Model;

class town extends Model
{
    /**
     * @example 3001****
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return town
     */
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
