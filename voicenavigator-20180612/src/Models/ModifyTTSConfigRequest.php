<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class ModifyTTSConfigRequest extends Model
{
    /**
     * @var string
     */
    public $appKey;

    /**
     * @example 12f407b22cbe4890ac595f09985848d5
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $nlsServiceType;

    /**
     * @example 100
     *
     * @var string
     */
    public $speechRate;

    /**
     * @example aixia
     *
     * @var string
     */
    public $voice;

    /**
     * @example 10
     *
     * @var string
     */
    public $volume;
    protected $_name = [
        'appKey'         => 'AppKey',
        'instanceId'     => 'InstanceId',
        'nlsServiceType' => 'NlsServiceType',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nlsServiceType) {
            $res['NlsServiceType'] = $this->nlsServiceType;
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
     * @return ModifyTTSConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NlsServiceType'])) {
            $model->nlsServiceType = $map['NlsServiceType'];
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
