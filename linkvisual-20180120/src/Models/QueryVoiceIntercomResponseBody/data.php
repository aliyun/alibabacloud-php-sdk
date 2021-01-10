<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryVoiceIntercomResponseBody;

use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryVoiceIntercomResponseBody\data\cryptoKey;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var cryptoKey
     */
    public $cryptoKey;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'cryptoKey' => 'CryptoKey',
        'url'       => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cryptoKey) {
            $res['CryptoKey'] = null !== $this->cryptoKey ? $this->cryptoKey->toMap() : null;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['CryptoKey'])) {
            $model->cryptoKey = cryptoKey::fromMap($map['CryptoKey']);
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
