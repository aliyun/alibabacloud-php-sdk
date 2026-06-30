<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTagResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $childCount;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $level;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $parentTagId;

    /**
     * @var string[]
     */
    public $path;

    /**
     * @var int
     */
    public $tagId;
    protected $_name = [
        'childCount' => 'ChildCount',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'level' => 'Level',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'parentTagId' => 'ParentTagId',
        'path' => 'Path',
        'tagId' => 'TagId',
    ];

    public function validate()
    {
        if (\is_array($this->path)) {
            Model::validateArray($this->path);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->childCount) {
            $res['ChildCount'] = $this->childCount;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->parentTagId) {
            $res['ParentTagId'] = $this->parentTagId;
        }

        if (null !== $this->path) {
            if (\is_array($this->path)) {
                $res['Path'] = [];
                $n1 = 0;
                foreach ($this->path as $item1) {
                    $res['Path'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
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
        if (isset($map['ChildCount'])) {
            $model->childCount = $map['ChildCount'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ParentTagId'])) {
            $model->parentTagId = $map['ParentTagId'];
        }

        if (isset($map['Path'])) {
            if (!empty($map['Path'])) {
                $model->path = [];
                $n1 = 0;
                foreach ($map['Path'] as $item1) {
                    $model->path[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }

        return $model;
    }
}
