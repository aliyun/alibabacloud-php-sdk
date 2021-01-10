<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryVoiceIntercomResponseBody\data;

use AlibabaCloud\Tea\Model;

class cryptoKey extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $iv;
    protected $_name = [
        'key' => 'Key',
        'iv'  => 'Iv',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->iv) {
            $res['Iv'] = $this->iv;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Iv'])) {
            $model->iv = $map['Iv'];
        }

        return $model;
    }
}
