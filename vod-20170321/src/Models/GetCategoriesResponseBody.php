<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetCategoriesResponseBody\category;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetCategoriesResponseBody\subCategories;
use AlibabaCloud\Tea\Model;

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
     * @var int
     */
    public $subTotal;

    /**
     * @var subCategories
     */
    public $subCategories;
    protected $_name = [
        'category'      => 'Category',
        'requestId'     => 'RequestId',
        'subTotal'      => 'SubTotal',
        'subCategories' => 'SubCategories',
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
        if (null !== $this->subTotal) {
            $res['SubTotal'] = $this->subTotal;
        }
        if (null !== $this->subCategories) {
            $res['SubCategories'] = null !== $this->subCategories ? $this->subCategories->toMap() : null;
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
        if (isset($map['SubTotal'])) {
            $model->subTotal = $map['SubTotal'];
        }
        if (isset($map['SubCategories'])) {
            $model->subCategories = subCategories::fromMap($map['SubCategories']);
        }

        return $model;
    }
}
