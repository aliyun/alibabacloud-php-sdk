<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveChannelsResponseBody\channels\inputAttachments\audioSelectors;

use AlibabaCloud\Dara\Model;

class audioLanguageSelection extends Model
{
    /**
     * @var string
     */
    public $languageCode;
    protected $_name = [
        'languageCode' => 'LanguageCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->languageCode) {
            $res['LanguageCode'] = $this->languageCode;
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
        if (isset($map['LanguageCode'])) {
            $model->languageCode = $map['LanguageCode'];
        }

        return $model;
    }
}
