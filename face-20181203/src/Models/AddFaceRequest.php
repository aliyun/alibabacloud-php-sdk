<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Face\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddFaceRequest extends Model
{
    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $person;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'group'    => 'Group',
        'person'   => 'Person',
        'image'    => 'Image',
        'imageUrl' => 'ImageUrl',
        'content'  => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->person) {
            $res['Person'] = $this->person;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Person'])) {
            $model->person = $map['Person'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
