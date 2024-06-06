<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Tea\Model;

class GetDetectLanguageResponseBody extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $detectedLanguage;

    /**
     * @var string
     */
    public $languageProbabilities;

    /**
     * @example 0C5EC1EC-1A06-4D60-97E6-4D41350945E4
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'detectedLanguage'      => 'DetectedLanguage',
        'languageProbabilities' => 'LanguageProbabilities',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detectedLanguage) {
            $res['DetectedLanguage'] = $this->detectedLanguage;
        }
        if (null !== $this->languageProbabilities) {
            $res['LanguageProbabilities'] = $this->languageProbabilities;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDetectLanguageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetectedLanguage'])) {
            $model->detectedLanguage = $map['DetectedLanguage'];
        }
        if (isset($map['LanguageProbabilities'])) {
            $model->languageProbabilities = $map['LanguageProbabilities'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
