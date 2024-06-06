<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Tea\Model;

class GetTitleGenerateRequest extends Model
{
    /**
     * @example {2:"None",10:"Plastic"}
     *
     * @var string
     */
    public $attributes;

    /**
     * @description This parameter is required.
     *
     * @example 127896018
     *
     * @var string
     */
    public $categoryId;

    /**
     * @example {   "product_id": "1",   "platform": "ae" }
     *
     * @var string
     */
    public $extra;

    /**
     * @example None,Plastic
     *
     * @var string
     */
    public $hotWords;

    /**
     * @description This parameter is required.
     *
     * @example en
     *
     * @var string
     */
    public $language;

    /**
     * @description This parameter is required.
     *
     * @example ae
     *
     * @var string
     */
    public $platform;

    /**
     * @description This parameter is required.
     *
     * @example 10pcs 80ml Kitchen Disposable
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'attributes' => 'Attributes',
        'categoryId' => 'CategoryId',
        'extra'      => 'Extra',
        'hotWords'   => 'HotWords',
        'language'   => 'Language',
        'platform'   => 'Platform',
        'title'      => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->hotWords) {
            $res['HotWords'] = $this->hotWords;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['HotWords'])) {
            $model->hotWords = $map['HotWords'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
