<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeCourseLessonResponseBody;

use AlibabaCloud\Dara\Model;

class courseLesson extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'content' => 'Content',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
