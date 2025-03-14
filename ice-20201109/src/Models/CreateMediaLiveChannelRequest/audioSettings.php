<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaLiveChannelRequest;

use AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaLiveChannelRequest\audioSettings\audioCodecSetting;
use AlibabaCloud\Tea\Model;

class audioSettings extends Model
{
    /**
     * @description The audio codec. If it is not specified, the source specification is used. Valid values: aac and libfdk_aac.
     *
     * @example libfdk_aac
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
     * @example a1
     *
     * @var string
     */
    public $audioSelectorName;

    /**
     * @description Enter a three-letter ISO 639-2 language code. If the audio track selected by the audio selector has a language code, the language code specified in the audio selector is used. If the selected audio track does not have a language code, or if the audio selector cannot find a track that matches its criteria, this language code is used.
     *
     * @example eng
     *
     * @var string
     */
    public $languageCode;

    /**
     * @description The tag that identifies the language of the RTMP input. It can be referenced by the output. The maximum length is 32 characters. Supported characters:
     *
     *   Unicode letters
     *   Digits (0-9)
     *   Underscore (_)
     *   Hyphen (-)
     *   Space (a space cannot be at the beginning or end)
     *
     * @example English
     *
     * @var string
     */
    public $languageName;

    /**
     * @description The name of the audio settings. Letters, digits, hyphens (-), and underscores (_) are supported. It can be up to 64 characters in length.
     *
     * This parameter is required.
     *
     * @example audio1
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
