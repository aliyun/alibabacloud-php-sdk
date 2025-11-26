<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationCategoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationCategoryResponseBody\typeList\categoryList;

class typeList extends Model
{
    /**
     * @var categoryList[]
     */
    public $categoryList;

    /**
     * @var string
     */
    public $typeDescribe;

    /**
     * @var string
     */
    public $typeId;

    /**
     * @var string
     */
    public $typeName;
    protected $_name = [
        'categoryList' => 'CategoryList',
        'typeDescribe' => 'TypeDescribe',
        'typeId' => 'TypeId',
        'typeName' => 'TypeName',
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

        if (null !== $this->typeDescribe) {
            $res['TypeDescribe'] = $this->typeDescribe;
        }

        if (null !== $this->typeId) {
            $res['TypeId'] = $this->typeId;
        }

        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
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

        if (isset($map['TypeDescribe'])) {
            $model->typeDescribe = $map['TypeDescribe'];
        }

        if (isset($map['TypeId'])) {
            $model->typeId = $map['TypeId'];
        }

        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
