<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetItemResponseBody;

use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetItemResponseBody\data\games;
use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetItemResponseBody\data\skus;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var games[]
     */
    public $games;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var int
     */
    public $originPrice;

    /**
     * @var int
     */
    public $salePrice;

    /**
     * @var string
     */
    public $sellerId;

    /**
     * @var skus[]
     */
    public $skus;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $supplier;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'categoryId'  => 'CategoryId',
        'createTime'  => 'CreateTime',
        'description' => 'Description',
        'games'       => 'Games',
        'itemId'      => 'ItemId',
        'modifyTime'  => 'ModifyTime',
        'originPrice' => 'OriginPrice',
        'salePrice'   => 'SalePrice',
        'sellerId'    => 'SellerId',
        'skus'        => 'Skus',
        'status'      => 'Status',
        'supplier'    => 'Supplier',
        'title'       => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->games) {
            $res['Games'] = [];
            if (null !== $this->games && \is_array($this->games)) {
                $n = 0;
                foreach ($this->games as $item) {
                    $res['Games'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->originPrice) {
            $res['OriginPrice'] = $this->originPrice;
        }
        if (null !== $this->salePrice) {
            $res['SalePrice'] = $this->salePrice;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }
        if (null !== $this->skus) {
            $res['Skus'] = [];
            if (null !== $this->skus && \is_array($this->skus)) {
                $n = 0;
                foreach ($this->skus as $item) {
                    $res['Skus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supplier) {
            $res['Supplier'] = $this->supplier;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Games'])) {
            if (!empty($map['Games'])) {
                $model->games = [];
                $n            = 0;
                foreach ($map['Games'] as $item) {
                    $model->games[$n++] = null !== $item ? games::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['OriginPrice'])) {
            $model->originPrice = $map['OriginPrice'];
        }
        if (isset($map['SalePrice'])) {
            $model->salePrice = $map['SalePrice'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }
        if (isset($map['Skus'])) {
            if (!empty($map['Skus'])) {
                $model->skus = [];
                $n           = 0;
                foreach ($map['Skus'] as $item) {
                    $model->skus[$n++] = null !== $item ? skus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Supplier'])) {
            $model->supplier = $map['Supplier'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
