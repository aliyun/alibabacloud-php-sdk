<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class DescribeTTSConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $nlsServiceType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $speechRate;

    /**
     * @var string
     */
    public $voice;

    /**
     * @var int
     */
    public $volume;
    protected $_name = [
        'appKey'         => 'AppKey',
        'nlsServiceType' => 'NlsServiceType',
        'requestId'      => 'RequestId',
        'speechRate'     => 'SpeechRate',
        'voice'          => 'Voice',
        'volume'         => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->nlsServiceType) {
            $res['NlsServiceType'] = $this->nlsServiceType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->speechRate) {
            $res['SpeechRate'] = $this->speechRate;
        }
        if (null !== $this->voice) {
            $res['Voice'] = $this->voice;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTTSConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['NlsServiceType'])) {
            $model->nlsServiceType = $map['NlsServiceType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpeechRate'])) {
            $model->speechRate = $map['SpeechRate'];
        }
        if (isset($map['Voice'])) {
            $model->voice = $map['Voice'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
