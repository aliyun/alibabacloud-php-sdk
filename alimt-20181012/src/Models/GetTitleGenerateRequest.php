<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Tea\Model;

class GetTitleGenerateRequest extends Model
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $hotWords;

    /**
     * @var string
     */
    public $attributes;

    /**
     * @var string
     */
    public $extra;
    protected $_name = [
        'title'      => 'Title',
        'language'   => 'Language',
        'platform'   => 'Platform',
        'categoryId' => 'CategoryId',
        'hotWords'   => 'HotWords',
        'attributes' => 'Attributes',
        'extra'      => 'Extra',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->hotWords) {
            $res['HotWords'] = $this->hotWords;
        }
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTitleGenerateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['HotWords'])) {
            $model->hotWords = $map['HotWords'];
        }
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }

        return $model;
    }
}
