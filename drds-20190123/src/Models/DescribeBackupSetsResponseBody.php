<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupSetsResponseBody\backupSets;
use AlibabaCloud\Tea\Model;

class DescribeBackupSetsResponseBody extends Model
{
    /**
     * @description The list of backup sets.
     *
     * @var backupSets
     */
    public $backupSets;

    /**
     * @description The ID of the request.
     *
     * @example 7103AEE3-9025-442F-B82B-BABD0A******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'backupSets' => 'BackupSets',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSets) {
            $res['BackupSets'] = null !== $this->backupSets ? $this->backupSets->toMap() : null;
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
     * @return DescribeBackupSetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSets'])) {
            $model->backupSets = backupSets::fromMap($map['BackupSets']);
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
