<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Tea\Model;

class CreateImageTranslateTaskRequest extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example {"have_ocr":"false","without_text":"false","have_psd":"true","ignore_entity":"false"}
     *
     * @var string
     */
    public $extra;

    /**
     * @description This parameter is required.
     *
     * @example zh
     *
     * @var string
     */
    public $sourceLanguage;

    /**
     * @description This parameter is required.
     *
     * @example en
     *
     * @var string
     */
    public $targetLanguage;

    /**
     * @description This parameter is required.
     *
     * @example http://xxx,http://yyy
     *
     * @var string
     */
    public $urlList;
    protected $_name = [
        'clientToken'    => 'ClientToken',
        'extra'          => 'Extra',
        'sourceLanguage' => 'SourceLanguage',
        'targetLanguage' => 'TargetLanguage',
        'urlList'        => 'UrlList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->sourceLanguage) {
            $res['SourceLanguage'] = $this->sourceLanguage;
        }
        if (null !== $this->targetLanguage) {
            $res['TargetLanguage'] = $this->targetLanguage;
        }
        if (null !== $this->urlList) {
            $res['UrlList'] = $this->urlList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateImageTranslateTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['SourceLanguage'])) {
            $model->sourceLanguage = $map['SourceLanguage'];
        }
        if (isset($map['TargetLanguage'])) {
            $model->targetLanguage = $map['TargetLanguage'];
        }
        if (isset($map['UrlList'])) {
            $model->urlList = $map['UrlList'];
        }

        return $model;
    }
}
