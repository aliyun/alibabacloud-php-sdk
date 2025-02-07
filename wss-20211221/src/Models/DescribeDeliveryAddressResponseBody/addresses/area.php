<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeliveryAddressResponseBody\addresses;

use AlibabaCloud\Dara\Model;

class area extends Model
{
    /**
     * @var int
     */
    public $areaId;
    /**
     * @var string
     */
    public $areaName;
    protected $_name = [
        'areaId'   => 'AreaId',
        'areaName' => 'AreaName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->areaId) {
            $res['AreaId'] = $this->areaId;
        }

        if (null !== $this->areaName) {
            $res['AreaName'] = $this->areaName;
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
        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
        }

        if (isset($map['AreaName'])) {
            $model->areaName = $map['AreaName'];
        }

        return $model;
    }
}
