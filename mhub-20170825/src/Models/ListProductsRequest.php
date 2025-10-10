<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models;

use AlibabaCloud\Dara\Model;

class ListProductsRequest extends Model
{
    /**
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $searchKeyWord;

    /**
     * @var bool
     */
    public $simple;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'offset' => 'Offset',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'productName' => 'ProductName',
        'searchKeyWord' => 'SearchKeyWord',
        'simple' => 'Simple',
        'size' => 'Size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        if (null !== $this->searchKeyWord) {
            $res['SearchKeyWord'] = $this->searchKeyWord;
        }

        if (null !== $this->simple) {
            $res['Simple'] = $this->simple;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        if (isset($map['SearchKeyWord'])) {
            $model->searchKeyWord = $map['SearchKeyWord'];
        }

        if (isset($map['Simple'])) {
            $model->simple = $map['Simple'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
