<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class ChatappEmbedSignUpRequest extends Model
{
    /**
     * @var string
     */
    public $inputToken;
    protected $_name = [
        'inputToken' => 'InputToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputToken) {
            $res['InputToken'] = $this->inputToken;
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
        if (isset($map['InputToken'])) {
            $model->inputToken = $map['InputToken'];
        }

        return $model;
    }
}
