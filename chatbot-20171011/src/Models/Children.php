<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class Children extends Model
{
    /**
     * @var string
     */
    public $areaCode;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var \AlibabaCloud\SDK\Chatbot\V20171011\Models\Children[]
     */
    public $childrens;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $parentCategoryId;
    protected $_name = [
        'areaCode'         => 'AreaCode',
        'categoryId'       => 'CategoryId',
        'childrens'        => 'Childrens',
        'name'             => 'Name',
        'parentCategoryId' => 'ParentCategoryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->areaCode) {
            $res['AreaCode'] = $this->areaCode;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->childrens) {
            $res['Childrens'] = [];
            if (null !== $this->childrens && \is_array($this->childrens)) {
                $n = 0;
                foreach ($this->childrens as $item) {
                    $res['Childrens'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentCategoryId) {
            $res['ParentCategoryId'] = $this->parentCategoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Children
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AreaCode'])) {
            $model->areaCode = $map['AreaCode'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Childrens'])) {
            if (!empty($map['Childrens'])) {
                $model->childrens = [];
                $n                = 0;
                foreach ($map['Childrens'] as $item) {
                    $model->childrens[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentCategoryId'])) {
            $model->parentCategoryId = $map['ParentCategoryId'];
        }

        return $model;
    }
}
