<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models;

use AlibabaCloud\Tea\Model;

class BindEslDeviceShelfRequest extends Model
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
    public $shelfCode;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $storeId;
    protected $_name = [
        'eslBarCode' => 'EslBarCode',
        'shelfCode'  => 'ShelfCode',
        'storeId'    => 'StoreId',
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
        if (null !== $this->shelfCode) {
            $res['ShelfCode'] = $this->shelfCode;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindEslDeviceShelfRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EslBarCode'])) {
            $model->eslBarCode = $map['EslBarCode'];
        }
        if (isset($map['ShelfCode'])) {
            $model->shelfCode = $map['ShelfCode'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }

        return $model;
    }
}
