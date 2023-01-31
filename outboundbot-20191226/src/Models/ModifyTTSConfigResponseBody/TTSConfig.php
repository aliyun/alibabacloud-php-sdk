<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyTTSConfigResponseBody;

use AlibabaCloud\Tea\Model;

class TTSConfig extends Model
{
    /**
     * @example 291cfc6a-8703-4bdd-a99d-9cba32d5288a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 947e0875-b5d4-4b33-b18c-7b2cf85bcb4f
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
     * @example 2a07b634-e15d-445f-bbcb-fc4ea2df7b87
     *
     * @var string
     */
    public $TTSConfigId;

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
        'instanceId'  => 'InstanceId',
        'scriptId'    => 'ScriptId',
        'speechRate'  => 'SpeechRate',
        'TTSConfigId' => 'TTSConfigId',
        'voice'       => 'Voice',
        'volume'      => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->speechRate) {
            $res['SpeechRate'] = $this->speechRate;
        }
        if (null !== $this->TTSConfigId) {
            $res['TTSConfigId'] = $this->TTSConfigId;
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
     * @return TTSConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['SpeechRate'])) {
            $model->speechRate = $map['SpeechRate'];
        }
        if (isset($map['TTSConfigId'])) {
            $model->TTSConfigId = $map['TTSConfigId'];
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
