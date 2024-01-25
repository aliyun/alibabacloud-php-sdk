<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models;

use AlibabaCloud\Tea\Model;

class DeleteStoreRequest extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $extraParams;

    /**
     * @example s-dxsxx****
     *
     * @var string
     */
    public $storeId;
    protected $_name = [
        'extraParams' => 'ExtraParams',
        'storeId'     => 'StoreId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extraParams) {
            $res['ExtraParams'] = $this->extraParams;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteStoreRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtraParams'])) {
            $model->extraParams = $map['ExtraParams'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }

        return $model;
    }
}
