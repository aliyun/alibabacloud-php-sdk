<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class MetaCategory extends Model
{
    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $depth;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int[]
     */
    public $ownerIds;

    /**
     * @var string[]
     */
    public $ownerNickNames;

    /**
     * @var int
     */
    public $parentCategoryId;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'createTime' => 'CreateTime',
        'depth' => 'Depth',
        'description' => 'Description',
        'name' => 'Name',
        'ownerIds' => 'OwnerIds',
        'ownerNickNames' => 'OwnerNickNames',
        'parentCategoryId' => 'ParentCategoryId',
        'remark' => 'Remark',
    ];

    public function validate()
    {
        if (\is_array($this->ownerIds)) {
            Model::validateArray($this->ownerIds);
        }
        if (\is_array($this->ownerNickNames)) {
            Model::validateArray($this->ownerNickNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->depth) {
            $res['Depth'] = $this->depth;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerIds) {
            if (\is_array($this->ownerIds)) {
                $res['OwnerIds'] = [];
                $n1 = 0;
                foreach ($this->ownerIds as $item1) {
                    $res['OwnerIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ownerNickNames) {
            if (\is_array($this->ownerNickNames)) {
                $res['OwnerNickNames'] = [];
                $n1 = 0;
                foreach ($this->ownerNickNames as $item1) {
                    $res['OwnerNickNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->parentCategoryId) {
            $res['ParentCategoryId'] = $this->parentCategoryId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Depth'])) {
            $model->depth = $map['Depth'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerIds'])) {
            if (!empty($map['OwnerIds'])) {
                $model->ownerIds = [];
                $n1 = 0;
                foreach ($map['OwnerIds'] as $item1) {
                    $model->ownerIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OwnerNickNames'])) {
            if (!empty($map['OwnerNickNames'])) {
                $model->ownerNickNames = [];
                $n1 = 0;
                foreach ($map['OwnerNickNames'] as $item1) {
                    $model->ownerNickNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ParentCategoryId'])) {
            $model->parentCategoryId = $map['ParentCategoryId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
