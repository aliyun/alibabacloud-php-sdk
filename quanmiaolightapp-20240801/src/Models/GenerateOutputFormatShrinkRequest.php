<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;

class GenerateOutputFormatShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $tagsShrink;

    /**
     * @var string
     */
    public $taskDescription;
    protected $_name = [
        'businessType' => 'businessType',
        'content' => 'content',
        'extraInfo' => 'extraInfo',
        'tagsShrink' => 'tags',
        'taskDescription' => 'taskDescription',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['businessType'] = $this->businessType;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->extraInfo) {
            $res['extraInfo'] = $this->extraInfo;
        }

        if (null !== $this->tagsShrink) {
            $res['tags'] = $this->tagsShrink;
        }

        if (null !== $this->taskDescription) {
            $res['taskDescription'] = $this->taskDescription;
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
        if (isset($map['businessType'])) {
            $model->businessType = $map['businessType'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['extraInfo'])) {
            $model->extraInfo = $map['extraInfo'];
        }

        if (isset($map['tags'])) {
            $model->tagsShrink = $map['tags'];
        }

        if (isset($map['taskDescription'])) {
            $model->taskDescription = $map['taskDescription'];
        }

        return $model;
    }
}
