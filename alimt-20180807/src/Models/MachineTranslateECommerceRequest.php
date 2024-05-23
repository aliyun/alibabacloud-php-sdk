<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20180807\Models;

use AlibabaCloud\Tea\Model;

class MachineTranslateECommerceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $contentFormat;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $sourceLanguage;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $sourceText;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $targetLanguage;
    protected $_name = [
        'contentFormat'  => 'ContentFormat',
        'sourceLanguage' => 'SourceLanguage',
        'sourceText'     => 'SourceText',
        'targetLanguage' => 'TargetLanguage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentFormat) {
            $res['ContentFormat'] = $this->contentFormat;
        }
        if (null !== $this->sourceLanguage) {
            $res['SourceLanguage'] = $this->sourceLanguage;
        }
        if (null !== $this->sourceText) {
            $res['SourceText'] = $this->sourceText;
        }
        if (null !== $this->targetLanguage) {
            $res['TargetLanguage'] = $this->targetLanguage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MachineTranslateECommerceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentFormat'])) {
            $model->contentFormat = $map['ContentFormat'];
        }
        if (isset($map['SourceLanguage'])) {
            $model->sourceLanguage = $map['SourceLanguage'];
        }
        if (isset($map['SourceText'])) {
            $model->sourceText = $map['SourceText'];
        }
        if (isset($map['TargetLanguage'])) {
            $model->targetLanguage = $map['TargetLanguage'];
        }

        return $model;
    }
}
