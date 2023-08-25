<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomizedVoiceResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomizedVoiceResponseBody\data\customizedVoice;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var customizedVoice
     */
    public $customizedVoice;
    protected $_name = [
        'customizedVoice' => 'CustomizedVoice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customizedVoice) {
            $res['CustomizedVoice'] = null !== $this->customizedVoice ? $this->customizedVoice->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomizedVoice'])) {
            $model->customizedVoice = customizedVoice::fromMap($map['CustomizedVoice']);
        }

        return $model;
    }
}
