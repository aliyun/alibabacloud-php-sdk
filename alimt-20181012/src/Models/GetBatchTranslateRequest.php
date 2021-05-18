<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Tea\Model;

class GetBatchTranslateRequest extends Model
{
    /**
     * @var string
     */
    public $formatType;

    /**
     * @var string
     */
    public $targetLanguage;

    /**
     * @var string
     */
    public $sourceLanguage;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $apiType;

    /**
     * @var string
     */
    public $sourceText;
    protected $_name = [
        'formatType'     => 'FormatType',
        'targetLanguage' => 'TargetLanguage',
        'sourceLanguage' => 'SourceLanguage',
        'scene'          => 'Scene',
        'apiType'        => 'ApiType',
        'sourceText'     => 'SourceText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->formatType) {
            $res['FormatType'] = $this->formatType;
        }
        if (null !== $this->targetLanguage) {
            $res['TargetLanguage'] = $this->targetLanguage;
        }
        if (null !== $this->sourceLanguage) {
            $res['SourceLanguage'] = $this->sourceLanguage;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->apiType) {
            $res['ApiType'] = $this->apiType;
        }
        if (null !== $this->sourceText) {
            $res['SourceText'] = $this->sourceText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBatchTranslateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FormatType'])) {
            $model->formatType = $map['FormatType'];
        }
        if (isset($map['TargetLanguage'])) {
            $model->targetLanguage = $map['TargetLanguage'];
        }
        if (isset($map['SourceLanguage'])) {
            $model->sourceLanguage = $map['SourceLanguage'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['ApiType'])) {
            $model->apiType = $map['ApiType'];
        }
        if (isset($map['SourceText'])) {
            $model->sourceText = $map['SourceText'];
        }

        return $model;
    }
}
