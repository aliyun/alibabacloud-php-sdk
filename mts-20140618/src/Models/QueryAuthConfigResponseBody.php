<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class QueryAuthConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $key1;

    /**
     * @var string
     */
    public $key2;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'key1'      => 'Key1',
        'key2'      => 'Key2',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key1) {
            $res['Key1'] = $this->key1;
        }
        if (null !== $this->key2) {
            $res['Key2'] = $this->key2;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAuthConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key1'])) {
            $model->key1 = $map['Key1'];
        }
        if (isset($map['Key2'])) {
            $model->key2 = $map['Key2'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
