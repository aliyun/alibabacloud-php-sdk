<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\RefreshTokenResponseBody;

use AlibabaCloud\Tea\Model;

class token extends Model
{
    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $signData;
    protected $_name = [
        'signature' => 'Signature',
        'signData'  => 'SignData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->signData) {
            $res['SignData'] = $this->signData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return token
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['SignData'])) {
            $model->signData = $map['SignData'];
        }

        return $model;
    }
}
