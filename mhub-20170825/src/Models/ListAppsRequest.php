<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models;

use AlibabaCloud\Tea\Model;

class ListAppsRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $osType;

    /**
     * @example 1
     *
     * @var string
     */
    public $page;

    /**
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @example 123456
     *
     * @var string
     */
    public $productId;
    protected $_name = [
        'osType' => 'OsType',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'productId' => 'ProductId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAppsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        return $model;
    }
}
