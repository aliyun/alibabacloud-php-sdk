<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindBizCategoryConfigResponseBody\data\bizCategory;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindBizCategoryConfigResponseBody\data\bizCategory\subConfigs\bizSubCategory;

class subConfigs extends Model
{
    /**
     * @var bizSubCategory[]
     */
    public $bizSubCategory;
    protected $_name = [
        'bizSubCategory' => 'BizSubCategory',
    ];

    public function validate()
    {
        if (\is_array($this->bizSubCategory)) {
            Model::validateArray($this->bizSubCategory);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizSubCategory) {
            if (\is_array($this->bizSubCategory)) {
                $res['BizSubCategory'] = [];
                $n1 = 0;
                foreach ($this->bizSubCategory as $item1) {
                    $res['BizSubCategory'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BizSubCategory'])) {
            if (!empty($map['BizSubCategory'])) {
                $model->bizSubCategory = [];
                $n1 = 0;
                foreach ($map['BizSubCategory'] as $item1) {
                    $model->bizSubCategory[$n1] = bizSubCategory::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
