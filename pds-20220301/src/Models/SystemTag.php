<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class SystemTag extends Model
{
    /**
     * @example 0.98
     *
     * @var float
     */
    public $confidence;

    /**
     * @example 篮球
     *
     * @var string
     */
    public $name;

    /**
     * @example 运动
     *
     * @var string
     */
    public $parentName;

    /**
     * @example 一起打篮球
     *
     * @var string
     */
    public $source;

    /**
     * @example 3
     *
     * @var int
     */
    public $tagLevel;
    protected $_name = [
        'confidence' => 'confidence',
        'name'       => 'name',
        'parentName' => 'parent_name',
        'source'     => 'source',
        'tagLevel'   => 'tag_level',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['confidence'] = $this->confidence;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->parentName) {
            $res['parent_name'] = $this->parentName;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->tagLevel) {
            $res['tag_level'] = $this->tagLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SystemTag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['confidence'])) {
            $model->confidence = $map['confidence'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['parent_name'])) {
            $model->parentName = $map['parent_name'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['tag_level'])) {
            $model->tagLevel = $map['tag_level'];
        }

        return $model;
    }
}
