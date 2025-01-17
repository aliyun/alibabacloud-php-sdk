<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCategoriesResponseBody\category;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCategoriesResponseBody\subCategories;

class GetCategoriesResponseBody extends Model
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
     * @var subCategories
     */
    public $subCategories;
    /**
     * @var int
     */
    public $subTotal;
    protected $_name = [
        'category'      => 'Category',
        'requestId'     => 'RequestId',
        'subCategories' => 'SubCategories',
        'subTotal'      => 'SubTotal',
    ];

    public function validate()
    {
        if (null !== $this->category) {
            $this->category->validate();
        }
        if (null !== $this->subCategories) {
            $this->subCategories->validate();
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
            $res['SubCategories'] = null !== $this->subCategories ? $this->subCategories->toArray($noStream) : $this->subCategories;
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
            $model->subCategories = subCategories::fromMap($map['SubCategories']);
        }

        if (isset($map['SubTotal'])) {
            $model->subTotal = $map['SubTotal'];
        }

        return $model;
    }
}
