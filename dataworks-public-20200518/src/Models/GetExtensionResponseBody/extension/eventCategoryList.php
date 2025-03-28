<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetExtensionResponseBody\extension;

use AlibabaCloud\Dara\Model;

class eventCategoryList extends Model
{
    /**
     * @var string
     */
    public $categoryCode;

    /**
     * @var string
     */
    public $categoryName;
    protected $_name = [
        'categoryCode' => 'CategoryCode',
        'categoryName' => 'CategoryName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
