<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistResponseBody;

use AlibabaCloud\Dara\Model;

class subtitlePlaylist extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $URI;
    protected $_name = [
        'index' => 'Index',
        'language' => 'Language',
        'token' => 'Token',
        'URI' => 'URI',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
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
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
