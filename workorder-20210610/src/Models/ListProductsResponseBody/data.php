<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20210610\Models\ListProductsResponseBody;

use AlibabaCloud\SDK\Workorder\V20210610\Models\ListProductsResponseBody\data\productList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $directoryId;

    /**
     * @var string
     */
    public $directoryName;

    /**
     * @var productList[]
     */
    public $productList;
    protected $_name = [
        'directoryId'   => 'DirectoryId',
        'directoryName' => 'DirectoryName',
        'productList'   => 'ProductList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->directoryName) {
            $res['DirectoryName'] = $this->directoryName;
        }
        if (null !== $this->productList) {
            $res['ProductList'] = [];
            if (null !== $this->productList && \is_array($this->productList)) {
                $n = 0;
                foreach ($this->productList as $item) {
                    $res['ProductList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['DirectoryName'])) {
            $model->directoryName = $map['DirectoryName'];
        }
        if (isset($map['ProductList'])) {
            if (!empty($map['ProductList'])) {
                $model->productList = [];
                $n                  = 0;
                foreach ($map['ProductList'] as $item) {
                    $model->productList[$n++] = null !== $item ? productList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
