<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomizedVoiceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomizedVoiceResponseBody\data\customizedVoice;

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
        if (null !== $this->customizedVoice) {
            $this->customizedVoice->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customizedVoice) {
            $res['CustomizedVoice'] = null !== $this->customizedVoice ? $this->customizedVoice->toArray($noStream) : $this->customizedVoice;
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
        if (isset($map['CustomizedVoice'])) {
            $model->customizedVoice = customizedVoice::fromMap($map['CustomizedVoice']);
        }

        return $model;
    }
}
