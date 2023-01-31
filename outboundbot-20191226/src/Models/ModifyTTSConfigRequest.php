<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ModifyTTSConfigRequest extends Model
{
    /**
     * @var string
     */
    public $appKey;

    /**
     * @example 27244bae-e446-4811-bb1d-f8a07b525af0
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example Managed
     *
     * @var string
     */
    public $nlsServiceType;

    /**
     * @example 1f1a2ba0-b3e7-4ff9-baf1-6dc8aeac0791
     *
     * @var string
     */
    public $scriptId;

    /**
     * @example 50
     *
     * @var string
     */
    public $speechRate;

    /**
     * @example xiaoyun
     *
     * @var string
     */
    public $voice;

    /**
     * @example 100
     *
     * @var string
     */
    public $volume;
    protected $_name = [
        'appKey'         => 'AppKey',
        'instanceId'     => 'InstanceId',
        'nlsServiceType' => 'NlsServiceType',
        'scriptId'       => 'ScriptId',
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
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
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
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
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
