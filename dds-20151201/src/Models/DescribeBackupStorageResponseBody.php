<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupStorageResponseBody extends Model
{
    /**
     * @description The free quota for the storage capacity used for backup. Unit: bytes.
     *
     * @example 42949672960
     *
     * @var int
     */
    public $freeSize;

    /**
     * @description The storage capacity used for the full backup. Unit: bytes.
     *
     * >  Instances that use cloud disks support snapshot backup. The size of the storage used for the current full backup is the size of the snapshot chain.
     * @example 789221621
     *
     * @var int
     */
    public $fullStorageSize;

    /**
     * @description The storage capacity used for the log backup. Unit: bytes.
     *
     * @example 7892216
     *
     * @var int
     */
    public $logStorageSize;

    /**
     * @description The request ID.
     *
     * @example D648B367-15B6-1B42-BD4B-4XXXXXXXXX
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'freeSize'        => 'FreeSize',
        'fullStorageSize' => 'FullStorageSize',
        'logStorageSize'  => 'LogStorageSize',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->freeSize) {
            $res['FreeSize'] = $this->freeSize;
        }
        if (null !== $this->fullStorageSize) {
            $res['FullStorageSize'] = $this->fullStorageSize;
        }
        if (null !== $this->logStorageSize) {
            $res['LogStorageSize'] = $this->logStorageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupStorageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FreeSize'])) {
            $model->freeSize = $map['FreeSize'];
        }
        if (isset($map['FullStorageSize'])) {
            $model->fullStorageSize = $map['FullStorageSize'];
        }
        if (isset($map['LogStorageSize'])) {
            $model->logStorageSize = $map['LogStorageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
