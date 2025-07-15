<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunStepByStepWritingRequest\referenceData\outlines;

use AlibabaCloud\Tea\Model;

class articles extends Model
{
    /**
     * @example 文章内容
     *
     * @var string
     */
    public $content;

    /**
     * @example 文章标题
     *
     * @var string
     */
    public $title;

    /**
     * @example 文章链接
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'content' => 'Content',
        'title' => 'Title',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return articles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
