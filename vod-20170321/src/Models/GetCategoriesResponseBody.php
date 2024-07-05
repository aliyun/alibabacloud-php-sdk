<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetCategoriesResponseBody\category;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetCategoriesResponseBody\subCategories;
use AlibabaCloud\Tea\Model;

class GetCategoriesResponseBody extends Model
{
    /**
     * @description The information about the category.
     *
     * @var category
     */
    public $category;

    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4AF6-D7393642CA58****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the subcategory.
     *
     * @var subCategories
     */
    public $subCategories;

    /**
     * @description The total number of subcategories.
     *
     * @example 3795
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = null !== $this->category ? $this->category->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subCategories) {
            $res['SubCategories'] = null !== $this->subCategories ? $this->subCategories->toMap() : null;
        }
        if (null !== $this->subTotal) {
            $res['SubTotal'] = $this->subTotal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCategoriesResponseBody
     */
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
