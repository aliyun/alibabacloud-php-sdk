<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySpeechResponseBody\data;

use AlibabaCloud\Tea\Model;

class soundCodeConfig extends Model
{
    /**
     * @var int
     */
    public $additionalDuration;

    /**
     * @var string
     */
    public $soundCodeContent;
    protected $_name = [
        'additionalDuration' => 'AdditionalDuration',
        'soundCodeContent'   => 'SoundCodeContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalDuration) {
            $res['AdditionalDuration'] = $this->additionalDuration;
        }
        if (null !== $this->soundCodeContent) {
            $res['SoundCodeContent'] = $this->soundCodeContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return soundCodeConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalDuration'])) {
            $model->additionalDuration = $map['AdditionalDuration'];
        }
        if (isset($map['SoundCodeContent'])) {
            $model->soundCodeContent = $map['SoundCodeContent'];
        }

        return $model;
    }
}
