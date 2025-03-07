<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveChannelsResponseBody\channels\inputAttachments\audioSelectors;

use AlibabaCloud\Tea\Model;

class audioLanguageSelection extends Model
{
    /**
     * @description A three-letter ISO 639-2 language code from within an audio source.
     *
     * This parameter is required.
     * @example eng
     *
     * @var string
     */
    public $languageCode;
    protected $_name = [
        'languageCode' => 'LanguageCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->languageCode) {
            $res['LanguageCode'] = $this->languageCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioLanguageSelection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LanguageCode'])) {
            $model->languageCode = $map['LanguageCode'];
        }

        return $model;
    }
}
