<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody\channel;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody\channel\audioSettings\audioCodecSetting;
use AlibabaCloud\Tea\Model;

class audioSettings extends Model
{
    /**
     * @description The audio codec.
     *
     * @example aac
     *
     * @var string
     */
    public $audioCodec;

    /**
     * @description The audio encoding settings.
     *
     * @var audioCodecSetting
     */
    public $audioCodecSetting;

    /**
     * @description The name of the audio selector.
     *
     * @example myselector
     *
     * @var string
     */
    public $audioSelectorName;

    /**
     * @description A three-letter ISO 639-2 language code.
     *
     * @example eng
     *
     * @var string
     */
    public $languageCode;

    /**
     * @description The name of the language.
     *
     * @example English
     *
     * @var string
     */
    public $languageName;

    /**
     * @description The name of the audio settings.
     *
     * @example zhuanfengzhuang
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'audioCodec' => 'AudioCodec',
        'audioCodecSetting' => 'AudioCodecSetting',
        'audioSelectorName' => 'AudioSelectorName',
        'languageCode' => 'LanguageCode',
        'languageName' => 'LanguageName',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioCodec) {
            $res['AudioCodec'] = $this->audioCodec;
        }
        if (null !== $this->audioCodecSetting) {
            $res['AudioCodecSetting'] = null !== $this->audioCodecSetting ? $this->audioCodecSetting->toMap() : null;
        }
        if (null !== $this->audioSelectorName) {
            $res['AudioSelectorName'] = $this->audioSelectorName;
        }
        if (null !== $this->languageCode) {
            $res['LanguageCode'] = $this->languageCode;
        }
        if (null !== $this->languageName) {
            $res['LanguageName'] = $this->languageName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioCodec'])) {
            $model->audioCodec = $map['AudioCodec'];
        }
        if (isset($map['AudioCodecSetting'])) {
            $model->audioCodecSetting = audioCodecSetting::fromMap($map['AudioCodecSetting']);
        }
        if (isset($map['AudioSelectorName'])) {
            $model->audioSelectorName = $map['AudioSelectorName'];
        }
        if (isset($map['LanguageCode'])) {
            $model->languageCode = $map['LanguageCode'];
        }
        if (isset($map['LanguageName'])) {
            $model->languageName = $map['LanguageName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
