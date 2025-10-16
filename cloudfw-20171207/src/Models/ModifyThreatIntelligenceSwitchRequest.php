<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyThreatIntelligenceSwitchRequest\categoryList;

class ModifyThreatIntelligenceSwitchRequest extends Model
{
    /**
     * @var categoryList[]
     */
    public $categoryList;
    protected $_name = [
        'categoryList' => 'CategoryList',
    ];

    public function validate()
    {
        if (\is_array($this->categoryList)) {
            Model::validateArray($this->categoryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryList) {
            if (\is_array($this->categoryList)) {
                $res['CategoryList'] = [];
                $n1 = 0;
                foreach ($this->categoryList as $item1) {
                    $res['CategoryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CategoryList'])) {
            if (!empty($map['CategoryList'])) {
                $model->categoryList = [];
                $n1 = 0;
                foreach ($map['CategoryList'] as $item1) {
                    $model->categoryList[$n1] = categoryList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
