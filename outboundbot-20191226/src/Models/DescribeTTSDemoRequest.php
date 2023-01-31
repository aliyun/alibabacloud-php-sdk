<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DescribeTTSDemoRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @example 0
     *
     * @var int
     */
    public $pitchRate;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var int
     */
    public $speechRate;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $voice;

    /**
     * @var int
     */
    public $volume;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'pitchRate'  => 'PitchRate',
        'scriptId'   => 'ScriptId',
        'speechRate' => 'SpeechRate',
        'text'       => 'Text',
        'voice'      => 'Voice',
        'volume'     => 'Volume',
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
        if (null !== $this->pitchRate) {
            $res['PitchRate'] = $this->pitchRate;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->speechRate) {
            $res['SpeechRate'] = $this->speechRate;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
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
     * @return DescribeTTSDemoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PitchRate'])) {
            $model->pitchRate = $map['PitchRate'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['SpeechRate'])) {
            $model->speechRate = $map['SpeechRate'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
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
