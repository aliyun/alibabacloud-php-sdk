<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetCategoriesResponseBody;

use AlibabaCloud\Tea\Model;

class category extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $parentId;

    /**
     * @var string
     */
    public $cateName;

    /**
     * @var int
     */
    public $cateId;

    /**
     * @var int
     */
    public $level;
    protected $_name = [
        'type'     => 'Type',
        'parentId' => 'ParentId',
        'cateName' => 'CateName',
        'cateId'   => 'CateId',
        'level'    => 'Level',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->cateName) {
            $res['CateName'] = $this->cateName;
        }
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return category
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
        }
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
