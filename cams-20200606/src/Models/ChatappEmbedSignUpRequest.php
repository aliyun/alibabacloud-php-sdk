<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class ChatappEmbedSignUpRequest extends Model
{
    /**
     * @example wlelkelwidilwloe-ewlwols0lwsllsld
     *
     * @var string
     */
    public $inputToken;
    protected $_name = [
        'inputToken' => 'InputToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputToken) {
            $res['InputToken'] = $this->inputToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChatappEmbedSignUpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputToken'])) {
            $model->inputToken = $map['InputToken'];
        }

        return $model;
    }
}
