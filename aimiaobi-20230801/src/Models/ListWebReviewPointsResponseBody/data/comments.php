<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListWebReviewPointsResponseBody\data;

use AlibabaCloud\Tea\Model;

class comments extends Model
{
    /**
     * @example 来源
     *
     * @var string
     */
    public $source;

    /**
     * @example 评论内容
     *
     * @var string
     */
    public $text;

    /**
     * @example 标题
     *
     * @var string
     */
    public $title;

    /**
     * @example 当前评论所属的URL
     *
     * @var string
     */
    public $url;

    /**
     * @example 评论用户名
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'source'   => 'Source',
        'text'     => 'Text',
        'title'    => 'Title',
        'url'      => 'Url',
        'username' => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return comments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
