<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryVoiceIntercomResponseBody\data;

use AlibabaCloud\Tea\Model;

class cryptoKey extends Model
{
    /**
     * @example MDEyMzQ1Njc4********0+Pw==
     *
     * @var string
     */
    public $iv;

    /**
     * @example bPvz6tnfonP1E+********v2Q==
     *
     * @var string
     */
    public $key;
    protected $_name = [
        'iv'  => 'Iv',
        'key' => 'Key',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iv) {
            $res['Iv'] = $this->iv;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cryptoKey
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Iv'])) {
            $model->iv = $map['Iv'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        return $model;
    }
}
