<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models;

use AlibabaCloud\Tea\Model;

class DeleteItemRequest extends Model
{
    /**
     * @example 6937372642255
     *
     * @var string
     */
    public $itemBarCode;

    /**
     * @example s-dxsxx****
     *
     * @var string
     */
    public $storeId;

    /**
     * @example false
     *
     * @var bool
     */
    public $unbindEslDevice;
    protected $_name = [
        'itemBarCode'     => 'ItemBarCode',
        'storeId'         => 'StoreId',
        'unbindEslDevice' => 'UnbindEslDevice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemBarCode) {
            $res['ItemBarCode'] = $this->itemBarCode;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }
        if (null !== $this->unbindEslDevice) {
            $res['UnbindEslDevice'] = $this->unbindEslDevice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemBarCode'])) {
            $model->itemBarCode = $map['ItemBarCode'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }
        if (isset($map['UnbindEslDevice'])) {
            $model->unbindEslDevice = $map['UnbindEslDevice'];
        }

        return $model;
    }
}
