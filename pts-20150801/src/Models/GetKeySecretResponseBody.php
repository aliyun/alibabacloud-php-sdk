<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20150801\Models;

use AlibabaCloud\Tea\Model;

class GetKeySecretResponseBody extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $secret;
    protected $_name = [
        'key'       => 'Key',
        'requestId' => 'RequestId',
        'secret'    => 'Secret',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->secret) {
            $res['Secret'] = $this->secret;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetKeySecretResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Secret'])) {
            $model->secret = $map['Secret'];
        }

        return $model;
    }
}
