<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\RefreshTokenResponseBody;

use AlibabaCloud\Dara\Model;

class token extends Model
{
    /**
     * @var string
     */
    public $signData;

    /**
     * @var string
     */
    public $signature;
    protected $_name = [
        'signData' => 'SignData',
        'signature' => 'Signature',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->signData) {
            $res['SignData'] = $this->signData;
        }

        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
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
        if (isset($map['SignData'])) {
            $model->signData = $map['SignData'];
        }

        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        return $model;
    }
}
