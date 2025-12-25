<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20210610\Models\ListProductsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Workorder\V20210610\Models\ListProductsResponseBody\data\productList;

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
        'directoryId' => 'DirectoryId',
        'directoryName' => 'DirectoryName',
        'productList' => 'ProductList',
    ];

    public function validate()
    {
        if (\is_array($this->productList)) {
            Model::validateArray($this->productList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->directoryName) {
            $res['DirectoryName'] = $this->directoryName;
        }

        if (null !== $this->productList) {
            if (\is_array($this->productList)) {
                $res['ProductList'] = [];
                $n1 = 0;
                foreach ($this->productList as $item1) {
                    $res['ProductList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['DirectoryName'])) {
            $model->directoryName = $map['DirectoryName'];
        }

        if (isset($map['ProductList'])) {
            if (!empty($map['ProductList'])) {
                $model->productList = [];
                $n1 = 0;
                foreach ($map['ProductList'] as $item1) {
                    $model->productList[$n1] = productList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
