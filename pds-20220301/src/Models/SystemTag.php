<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class SystemTag extends Model
{
    /**
     * @var float
     */
    public $centricScore;

    /**
     * @var float
     */
    public $confidence;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentName;

    /**
     * @var int
     */
    public $tagLevel;
    protected $_name = [
        'centricScore' => 'centric_score',
        'confidence' => 'confidence',
        'name' => 'name',
        'parentName' => 'parent_name',
        'tagLevel' => 'tag_level',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->centricScore) {
            $res['centric_score'] = $this->centricScore;
        }

        if (null !== $this->confidence) {
            $res['confidence'] = $this->confidence;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->parentName) {
            $res['parent_name'] = $this->parentName;
        }

        if (null !== $this->tagLevel) {
            $res['tag_level'] = $this->tagLevel;
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
        if (isset($map['centric_score'])) {
            $model->centricScore = $map['centric_score'];
        }

        if (isset($map['confidence'])) {
            $model->confidence = $map['confidence'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['parent_name'])) {
            $model->parentName = $map['parent_name'];
        }

        if (isset($map['tag_level'])) {
            $model->tagLevel = $map['tag_level'];
        }

        return $model;
    }
}
