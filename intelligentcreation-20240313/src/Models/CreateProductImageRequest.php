<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class CreateProductImageRequest extends Model
{
    /**
     * @var string
     */
    public $backgroundDescription;

    /**
     * @var int
     */
    public $backgroundPriority;

    /**
     * @var string
     */
    public $backgroundUrl;

    /**
     * @var string
     */
    public $highlightText;

    /**
     * @var int
     */
    public $imageCount;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $subTitle;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'backgroundDescription' => 'backgroundDescription',
        'backgroundPriority' => 'backgroundPriority',
        'backgroundUrl' => 'backgroundUrl',
        'highlightText' => 'highlightText',
        'imageCount' => 'imageCount',
        'imageUrl' => 'imageUrl',
        'subTitle' => 'subTitle',
        'title' => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backgroundDescription) {
            $res['backgroundDescription'] = $this->backgroundDescription;
        }

        if (null !== $this->backgroundPriority) {
            $res['backgroundPriority'] = $this->backgroundPriority;
        }

        if (null !== $this->backgroundUrl) {
            $res['backgroundUrl'] = $this->backgroundUrl;
        }

        if (null !== $this->highlightText) {
            $res['highlightText'] = $this->highlightText;
        }

        if (null !== $this->imageCount) {
            $res['imageCount'] = $this->imageCount;
        }

        if (null !== $this->imageUrl) {
            $res['imageUrl'] = $this->imageUrl;
        }

        if (null !== $this->subTitle) {
            $res['subTitle'] = $this->subTitle;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['backgroundDescription'])) {
            $model->backgroundDescription = $map['backgroundDescription'];
        }

        if (isset($map['backgroundPriority'])) {
            $model->backgroundPriority = $map['backgroundPriority'];
        }

        if (isset($map['backgroundUrl'])) {
            $model->backgroundUrl = $map['backgroundUrl'];
        }

        if (isset($map['highlightText'])) {
            $model->highlightText = $map['highlightText'];
        }

        if (isset($map['imageCount'])) {
            $model->imageCount = $map['imageCount'];
        }

        if (isset($map['imageUrl'])) {
            $model->imageUrl = $map['imageUrl'];
        }

        if (isset($map['subTitle'])) {
            $model->subTitle = $map['subTitle'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
