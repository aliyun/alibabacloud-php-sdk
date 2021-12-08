<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dplus\V20201216\Models;

use AlibabaCloud\Tea\Model;

class CreateImageAmazonTaskShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $gif;

    /**
     * @var string
     */
    public $imgUrlListShrink;

    /**
     * @var string
     */
    public $templateMode;

    /**
     * @var string
     */
    public $textListShrink;
    protected $_name = [
        'gif'              => 'Gif',
        'imgUrlListShrink' => 'ImgUrlList',
        'templateMode'     => 'TemplateMode',
        'textListShrink'   => 'TextList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gif) {
            $res['Gif'] = $this->gif;
        }
        if (null !== $this->imgUrlListShrink) {
            $res['ImgUrlList'] = $this->imgUrlListShrink;
        }
        if (null !== $this->templateMode) {
            $res['TemplateMode'] = $this->templateMode;
        }
        if (null !== $this->textListShrink) {
            $res['TextList'] = $this->textListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateImageAmazonTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Gif'])) {
            $model->gif = $map['Gif'];
        }
        if (isset($map['ImgUrlList'])) {
            $model->imgUrlListShrink = $map['ImgUrlList'];
        }
        if (isset($map['TemplateMode'])) {
            $model->templateMode = $map['TemplateMode'];
        }
        if (isset($map['TextList'])) {
            $model->textListShrink = $map['TextList'];
        }

        return $model;
    }
}
