<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\IvrCallRequest;

use AlibabaCloud\Tea\Model;

class menuKeyMap extends Model
{
    /**
     * @description The voice that corresponds to the key specified by the **MenuKeyMap.N.Key** parameter.
     *
     *   If you use a voice notification file, this parameter specifies the voice ID. You can log on to the [Voice Messaging Service console](https://dyvms.console.aliyun.com/overview/home), choose **Voice Messages** > **Voice Notifications**, and then click the **Voice Notification Files** tab to view the voice ID.
     *   If you use a TTS template, this parameter specifies the template ID. You can log on to the [Voice Messaging Service console](https://dyvms.console.aliyun.com/overview/home), choose **Voice Messages** > **Voice Notifications**, and then click the **TTS Template** tab to view the template ID.
     *
     * @example TTS_1235****
     *
     * @var string
     */
    public $code;

    /**
     * @description The key that can be pressed by the subscriber.
     *
     * @example 1
     *
     * @var string
     */
    public $key;

    /**
     * @description The variables in the TTS template, in the JSON format.
     *
     * >
     *
     *   This parameter specifies the substitution relationship of the variables in the TTS template if the value of the **MenuKeyMap.N.Code** parameter is set to the ID of the TTS template.
     *
     *   This parameter is required if the value of the **MenuKeyMap.N.Code** parameter is set to the ID of a TTS template that contains variables.
     *
     * @example {"name":"xxx","code":"123"}
     *
     * @var string
     */
    public $ttsParams;
    protected $_name = [
        'code'      => 'Code',
        'key'       => 'Key',
        'ttsParams' => 'TtsParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->ttsParams) {
            $res['TtsParams'] = $this->ttsParams;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return menuKeyMap
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['TtsParams'])) {
            $model->ttsParams = $map['TtsParams'];
        }

        return $model;
    }
}
