<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetConsistencySnapshotResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $consistencyResultJsonStr;
    protected $_name = [
        'requestId'                => 'RequestId',
        'consistencyResultJsonStr' => 'ConsistencyResultJsonStr',
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
        if (null !== $this->consistencyResultJsonStr) {
            $res['ConsistencyResultJsonStr'] = $this->consistencyResultJsonStr;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConsistencyResultJsonStr'])) {
            $model->consistencyResultJsonStr = $map['ConsistencyResultJsonStr'];
        }

        return $model;
    }
}
