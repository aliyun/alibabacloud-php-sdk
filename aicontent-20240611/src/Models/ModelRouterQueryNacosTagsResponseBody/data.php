<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterQueryNacosTagsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $tagName;
    protected $_name = [
        'tag' => 'tag',
        'tagName' => 'tagName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
        }

        if (null !== $this->tagName) {
            $res['tagName'] = $this->tagName;
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
        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }

        if (isset($map['tagName'])) {
            $model->tagName = $map['tagName'];
        }

        return $model;
    }
}
