<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Tea\Model;

class CreateAsyncTranslateRequest extends Model
{
    /**
     * @example translate_standard
     *
     * @var string
     */
    public $apiType;

    /**
     * @example text
     *
     * @var string
     */
    public $formatType;

    /**
     * @example general
     *
     * @var string
     */
    public $scene;

    /**
     * @example en
     *
     * @var string
     */
    public $sourceLanguage;

    /**
     * @example Opinion: We have finally gotten some relief at the pump. But it may not last long
     *
     * @var string
     */
    public $sourceText;

    /**
     * @example zh
     *
     * @var string
     */
    public $targetLanguage;
    protected $_name = [
        'apiType'        => 'ApiType',
        'formatType'     => 'FormatType',
        'scene'          => 'Scene',
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
        if (null !== $this->apiType) {
            $res['ApiType'] = $this->apiType;
        }
        if (null !== $this->formatType) {
            $res['FormatType'] = $this->formatType;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
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
     * @return CreateAsyncTranslateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiType'])) {
            $model->apiType = $map['ApiType'];
        }
        if (isset($map['FormatType'])) {
            $model->formatType = $map['FormatType'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
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
