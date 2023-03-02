<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetExtensionResponseBody\extension;

use AlibabaCloud\Tea\Model;

class eventCategoryList extends Model
{
    /**
     * @description The code of the event type.
     *
     * @example file-change
     *
     * @var string
     */
    public $categoryCode;

    /**
     * @description The name of the event type.
     *
     * @var string
     */
    public $categoryName;
    protected $_name = [
        'categoryCode' => 'CategoryCode',
        'categoryName' => 'CategoryName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryCode) {
            $res['CategoryCode'] = $this->categoryCode;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventCategoryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryCode'])) {
            $model->categoryCode = $map['CategoryCode'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        return $model;
    }
}
