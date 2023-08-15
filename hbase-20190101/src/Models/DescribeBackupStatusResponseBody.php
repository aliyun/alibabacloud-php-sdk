<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupStatusResponseBody extends Model
{
    /**
     * @example opened
     *
     * @var string
     */
    public $backupStatus;

    /**
     * @example bds-m5e54q06ceyhxxxx
     *
     * @var string
     */
    public $bdsClusterId;

    /**
     * @example ld-m5eznlga4k5bcxxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example F7E71430-A825-470A-B40B-DF3F3AAC9BEE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupStatus' => 'BackupStatus',
        'bdsClusterId' => 'BdsClusterId',
        'clusterId'    => 'ClusterId',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->bdsClusterId) {
            $res['BdsClusterId'] = $this->bdsClusterId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['BdsClusterId'])) {
            $model->bdsClusterId = $map['BdsClusterId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
