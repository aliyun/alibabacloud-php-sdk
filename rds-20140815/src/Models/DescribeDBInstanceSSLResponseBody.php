<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceSSLResponseBody extends Model
{
    /**
     * @var string
     */
    public $SSLExpireTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $requireUpdateReason;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $requireUpdate;
    protected $_name = [
        'SSLExpireTime'       => 'SSLExpireTime',
        'requestId'           => 'RequestId',
        'requireUpdateReason' => 'RequireUpdateReason',
        'connectionString'    => 'ConnectionString',
        'requireUpdate'       => 'RequireUpdate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SSLExpireTime) {
            $res['SSLExpireTime'] = $this->SSLExpireTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->requireUpdateReason) {
            $res['RequireUpdateReason'] = $this->requireUpdateReason;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->requireUpdate) {
            $res['RequireUpdate'] = $this->requireUpdate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceSSLResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SSLExpireTime'])) {
            $model->SSLExpireTime = $map['SSLExpireTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RequireUpdateReason'])) {
            $model->requireUpdateReason = $map['RequireUpdateReason'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['RequireUpdate'])) {
            $model->requireUpdate = $map['RequireUpdate'];
        }

        return $model;
    }
}
