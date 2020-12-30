<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $bdsClusterId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $backupStatus;
    protected $_name = [
        'requestId'    => 'RequestId',
        'bdsClusterId' => 'BdsClusterId',
        'clusterId'    => 'ClusterId',
        'backupStatus' => 'BackupStatus',
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
        if (null !== $this->bdsClusterId) {
            $res['BdsClusterId'] = $this->bdsClusterId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BdsClusterId'])) {
            $model->bdsClusterId = $map['BdsClusterId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }

        return $model;
    }
}
