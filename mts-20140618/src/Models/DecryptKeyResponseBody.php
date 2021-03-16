<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class DecryptKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $rand;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $plaintext;
    protected $_name = [
        'rand'      => 'Rand',
        'requestId' => 'RequestId',
        'plaintext' => 'Plaintext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rand) {
            $res['Rand'] = $this->rand;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->plaintext) {
            $res['Plaintext'] = $this->plaintext;
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
        if (isset($map['Rand'])) {
            $model->rand = $map['Rand'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Plaintext'])) {
            $model->plaintext = $map['Plaintext'];
        }

        return $model;
    }
}
