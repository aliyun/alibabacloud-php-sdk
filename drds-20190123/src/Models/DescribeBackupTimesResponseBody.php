<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupTimesResponseBody\restoreTime;
use AlibabaCloud\Tea\Model;

class DescribeBackupTimesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var restoreTime
     */
    public $restoreTime;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId'   => 'RequestId',
        'restoreTime' => 'RestoreTime',
        'success'     => 'Success',
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
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = null !== $this->restoreTime ? $this->restoreTime->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = restoreTime::fromMap($map['RestoreTime']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
