<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models;

use AlibabaCloud\Tea\Model;

class UnmapPlanogramRailRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $railCode;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $storeId;
    protected $_name = [
        'railCode' => 'RailCode',
        'storeId'  => 'StoreId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->railCode) {
            $res['RailCode'] = $this->railCode;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnmapPlanogramRailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RailCode'])) {
            $model->railCode = $map['RailCode'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }

        return $model;
    }
}
