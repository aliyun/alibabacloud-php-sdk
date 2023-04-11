<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Tea\Model;

class GetImageTranslateRequest extends Model
{
    /**
     * @example {"have_ocr": "false", "without_text":"true", "have_psd": "false", "ignore_entity": "false"}
     *
     * @var string
     */
    public $extra;

    /**
     * @example zh
     *
     * @var string
     */
    public $sourceLanguage;

    /**
     * @example en
     *
     * @var string
     */
    public $targetLanguage;

    /**
     * @example http://xxxxxxx.oss-cn-shenzhen.aliyuncs.com/xxxxxx.jpg
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'extra'          => 'Extra',
        'sourceLanguage' => 'SourceLanguage',
        'targetLanguage' => 'TargetLanguage',
        'url'            => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->sourceLanguage) {
            $res['SourceLanguage'] = $this->sourceLanguage;
        }
        if (null !== $this->targetLanguage) {
            $res['TargetLanguage'] = $this->targetLanguage;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetImageTranslateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['SourceLanguage'])) {
            $model->sourceLanguage = $map['SourceLanguage'];
        }
        if (isset($map['TargetLanguage'])) {
            $model->targetLanguage = $map['TargetLanguage'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
