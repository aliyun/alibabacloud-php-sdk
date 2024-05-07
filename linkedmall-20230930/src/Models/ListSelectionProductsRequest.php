<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ListSelectionProductsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @example 56****2304
     *
     * @var string
     */
    public $purchaserId;
    protected $_name = [
        'pageNumber'  => 'pageNumber',
        'pageSize'    => 'pageSize',
        'purchaserId' => 'purchaserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->purchaserId) {
            $res['purchaserId'] = $this->purchaserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSelectionProductsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['purchaserId'])) {
            $model->purchaserId = $map['purchaserId'];
        }

        return $model;
    }
}
