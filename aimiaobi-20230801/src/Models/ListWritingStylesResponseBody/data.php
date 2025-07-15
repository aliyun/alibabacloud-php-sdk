<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListWritingStylesResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\WritingStyleTemplateDefine;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var WritingStyleTemplateDefine
     */
    public $distributeStepTemplateDefine;

    /**
     * @example false
     *
     * @var bool
     */
    public $distributeWriting;

    /**
     * @var string
     */
    public $emoji;

    /**
     * @var string
     */
    public $styleDescription;

    /**
     * @var string
     */
    public $styleImage;

    /**
     * @var string
     */
    public $styleKey;

    /**
     * @var string
     */
    public $styleName;

    /**
     * @var WritingStyleTemplateDefine
     */
    public $templateDefine;
    protected $_name = [
        'distributeStepTemplateDefine' => 'DistributeStepTemplateDefine',
        'distributeWriting' => 'DistributeWriting',
        'emoji' => 'Emoji',
        'styleDescription' => 'StyleDescription',
        'styleImage' => 'StyleImage',
        'styleKey' => 'StyleKey',
        'styleName' => 'StyleName',
        'templateDefine' => 'TemplateDefine',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->distributeStepTemplateDefine) {
            $res['DistributeStepTemplateDefine'] = null !== $this->distributeStepTemplateDefine ? $this->distributeStepTemplateDefine->toMap() : null;
        }
        if (null !== $this->distributeWriting) {
            $res['DistributeWriting'] = $this->distributeWriting;
        }
        if (null !== $this->emoji) {
            $res['Emoji'] = $this->emoji;
        }
        if (null !== $this->styleDescription) {
            $res['StyleDescription'] = $this->styleDescription;
        }
        if (null !== $this->styleImage) {
            $res['StyleImage'] = $this->styleImage;
        }
        if (null !== $this->styleKey) {
            $res['StyleKey'] = $this->styleKey;
        }
        if (null !== $this->styleName) {
            $res['StyleName'] = $this->styleName;
        }
        if (null !== $this->templateDefine) {
            $res['TemplateDefine'] = null !== $this->templateDefine ? $this->templateDefine->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DistributeStepTemplateDefine'])) {
            $model->distributeStepTemplateDefine = WritingStyleTemplateDefine::fromMap($map['DistributeStepTemplateDefine']);
        }
        if (isset($map['DistributeWriting'])) {
            $model->distributeWriting = $map['DistributeWriting'];
        }
        if (isset($map['Emoji'])) {
            $model->emoji = $map['Emoji'];
        }
        if (isset($map['StyleDescription'])) {
            $model->styleDescription = $map['StyleDescription'];
        }
        if (isset($map['StyleImage'])) {
            $model->styleImage = $map['StyleImage'];
        }
        if (isset($map['StyleKey'])) {
            $model->styleKey = $map['StyleKey'];
        }
        if (isset($map['StyleName'])) {
            $model->styleName = $map['StyleName'];
        }
        if (isset($map['TemplateDefine'])) {
            $model->templateDefine = WritingStyleTemplateDefine::fromMap($map['TemplateDefine']);
        }

        return $model;
    }
}
