<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\Tea\Model;

class GetConsistencySnapshotResponseBody extends Model
{
    /**
     * @var string
     */
    public $consistencyResultJsonStr;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'consistencyResultJsonStr' => 'ConsistencyResultJsonStr',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consistencyResultJsonStr) {
            $res['ConsistencyResultJsonStr'] = $this->consistencyResultJsonStr;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConsistencySnapshotResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsistencyResultJsonStr'])) {
            $model->consistencyResultJsonStr = $map['ConsistencyResultJsonStr'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
