<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Dara\Model;

class GetDetectLanguageVpcResponseBody extends Model
{
    /**
     * @var string
     */
    public $detectedLanguage;

    /**
     * @var string
     */
    public $languageProbabilities;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'detectedLanguage' => 'DetectedLanguage',
        'languageProbabilities' => 'LanguageProbabilities',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
