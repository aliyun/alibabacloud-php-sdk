<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models;

use AlibabaCloud\Tea\Model;

class MapPlanogramRailRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $layer;

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
    public $shelf;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $storeId;
    protected $_name = [
        'layer'    => 'Layer',
        'railCode' => 'RailCode',
        'shelf'    => 'Shelf',
        'storeId'  => 'StoreId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->layer) {
            $res['Layer'] = $this->layer;
        }
        if (null !== $this->railCode) {
            $res['RailCode'] = $this->railCode;
        }
        if (null !== $this->shelf) {
            $res['Shelf'] = $this->shelf;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MapPlanogramRailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Layer'])) {
            $model->layer = $map['Layer'];
        }
        if (isset($map['RailCode'])) {
            $model->railCode = $map['RailCode'];
        }
        if (isset($map['Shelf'])) {
            $model->shelf = $map['Shelf'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }

        return $model;
    }
}
