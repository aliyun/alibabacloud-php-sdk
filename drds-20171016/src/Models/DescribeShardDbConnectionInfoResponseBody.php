<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models;

use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeShardDbConnectionInfoResponseBody\connectionInfo;
use AlibabaCloud\Tea\Model;

class DescribeShardDbConnectionInfoResponseBody extends Model
{
    /**
     * @var connectionInfo
     */
    public $connectionInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'connectionInfo' => 'ConnectionInfo',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionInfo) {
            $res['ConnectionInfo'] = null !== $this->connectionInfo ? $this->connectionInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeShardDbConnectionInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionInfo'])) {
            $model->connectionInfo = connectionInfo::fromMap($map['ConnectionInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
