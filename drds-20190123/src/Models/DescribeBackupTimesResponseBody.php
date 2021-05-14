<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupTimesResponseBody\restoreTime;
use AlibabaCloud\Tea\Model;

class DescribeBackupTimesResponseBody extends Model
{
    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var restoreTime
     */
    public $restoreTime;
    protected $_name = [
        'success'     => 'Success',
        'requestId'   => 'RequestId',
        'restoreTime' => 'RestoreTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = null !== $this->restoreTime ? $this->restoreTime->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupTimesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = restoreTime::fromMap($map['RestoreTime']);
        }

        return $model;
    }
}
