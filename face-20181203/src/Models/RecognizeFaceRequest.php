<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Face\V20181203\Models;

use AlibabaCloud\Tea\Model;

class RecognizeFaceRequest extends Model
{
    /**
     * @var string
     */
    public $group;

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
     * @return RecognizeFaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
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
