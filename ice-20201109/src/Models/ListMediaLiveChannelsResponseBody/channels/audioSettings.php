<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveChannelsResponseBody\channels;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveChannelsResponseBody\channels\audioSettings\audioCodecSetting;

class audioSettings extends Model
{
    /**
     * @var string
     */
    public $audioCodec;

    /**
     * @var audioCodecSetting
     */
    public $audioCodecSetting;

    /**
     * @var string
     */
    public $audioSelectorName;

    /**
     * @var string
     */
    public $languageCode;

    /**
     * @var string
     */
    public $languageName;

    /**
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

    public function validate()
    {
        if (null !== $this->audioCodecSetting) {
            $this->audioCodecSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioCodec) {
            $res['AudioCodec'] = $this->audioCodec;
        }

        if (null !== $this->audioCodecSetting) {
            $res['AudioCodecSetting'] = null !== $this->audioCodecSetting ? $this->audioCodecSetting->toArray($noStream) : $this->audioCodecSetting;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
