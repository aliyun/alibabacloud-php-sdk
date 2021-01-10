<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class DecryptKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $plaintext;

    /**
     * @var string
     */
    public $rand;
    protected $_name = [
        'requestId' => 'RequestId',
        'plaintext' => 'Plaintext',
        'rand'      => 'Rand',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->plaintext) {
            $res['Plaintext'] = $this->plaintext;
        }
        if (null !== $this->rand) {
            $res['Rand'] = $this->rand;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DecryptKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Plaintext'])) {
            $model->plaintext = $map['Plaintext'];
        }
        if (isset($map['Rand'])) {
            $model->rand = $map['Rand'];
        }

        return $model;
    }
}
