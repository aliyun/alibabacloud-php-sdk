<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeliveryAddressResponseBody\addresses;

use AlibabaCloud\Tea\Model;

class area extends Model
{
    /**
     * @example 33****
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return area
     */
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
