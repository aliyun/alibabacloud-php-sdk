<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class AppMaterialDirectory extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var AppMaterialDirectory[]
     */
    public $children;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sortNum;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bizId' => 'BizId',
        'children' => 'Children',
        'directoryId' => 'DirectoryId',
        'name' => 'Name',
        'sortNum' => 'SortNum',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->children) {
            if (\is_array($this->children)) {
                $res['Children'] = [];
                $n1 = 0;
                foreach ($this->children as $item1) {
                    $res['Children'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->sortNum) {
            $res['SortNum'] = $this->sortNum;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n1 = 0;
                foreach ($map['Children'] as $item1) {
                    $model->children[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SortNum'])) {
            $model->sortNum = $map['SortNum'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
