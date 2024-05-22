<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models;

use AlibabaCloud\Tea\Model;

class BindEslDeviceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $eslBarCode;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $itemBarCode;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $storeId;
    protected $_name = [
        'eslBarCode'  => 'EslBarCode',
        'itemBarCode' => 'ItemBarCode',
        'storeId'     => 'StoreId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eslBarCode) {
            $res['EslBarCode'] = $this->eslBarCode;
        }
        if (null !== $this->itemBarCode) {
            $res['ItemBarCode'] = $this->itemBarCode;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindEslDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EslBarCode'])) {
            $model->eslBarCode = $map['EslBarCode'];
        }
        if (isset($map['ItemBarCode'])) {
            $model->itemBarCode = $map['ItemBarCode'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }

        return $model;
    }
}
