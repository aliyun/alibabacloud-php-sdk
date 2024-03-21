<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class EncryptPasswordResponseBody extends Model
{
    /**
     * @example d34601bc-e6b1-4433-b0cc-8f6c5e52;n4apvGub3OBoj4Grwg==;thhO4UEomJfdvwnwlA==
     *
     * @var string
     */
    public $encryptedPassword;

    /**
     * @example AF538DA8-FFC6-52DA-8FF8-7B92579F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'encryptedPassword' => 'EncryptedPassword',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryptedPassword) {
            $res['EncryptedPassword'] = $this->encryptedPassword;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EncryptPasswordResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncryptedPassword'])) {
            $model->encryptedPassword = $map['EncryptedPassword'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
