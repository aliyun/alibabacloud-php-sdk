<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetAssetCategoryResponseBody\category;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetAssetCategoryResponseBody\subCategories;

class GetAssetCategoryResponseBody extends Model
{
    /**
     * @var category
     */
    public $category;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var subCategories[]
     */
    public $subCategories;

    /**
     * @var int
     */
    public $subTotal;
    protected $_name = [
        'category' => 'Category',
        'requestId' => 'RequestId',
        'subCategories' => 'SubCategories',
        'subTotal' => 'SubTotal',
    ];

    public function validate()
    {
        if (null !== $this->category) {
            $this->category->validate();
        }
        if (\is_array($this->subCategories)) {
            Model::validateArray($this->subCategories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = null !== $this->category ? $this->category->toArray($noStream) : $this->category;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->subCategories) {
            if (\is_array($this->subCategories)) {
                $res['SubCategories'] = [];
                $n1 = 0;
                foreach ($this->subCategories as $item1) {
                    $res['SubCategories'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->subTotal) {
            $res['SubTotal'] = $this->subTotal;
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
        if (isset($map['Category'])) {
            $model->category = category::fromMap($map['Category']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SubCategories'])) {
            if (!empty($map['SubCategories'])) {
                $model->subCategories = [];
                $n1 = 0;
                foreach ($map['SubCategories'] as $item1) {
                    $model->subCategories[$n1] = subCategories::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SubTotal'])) {
            $model->subTotal = $map['SubTotal'];
        }

        return $model;
    }
}
