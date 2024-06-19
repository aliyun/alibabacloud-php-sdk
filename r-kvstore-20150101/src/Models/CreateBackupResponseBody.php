<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class CreateBackupResponseBody extends Model
{
    /**
     * @description The ID of the backup task.\\
     * For cluster instance created after December 5, 2023, all jobs for nodes in an instance are represented by a single job ID.
     * @example 1162****
     *
     * @var string
     */
    public $backupJobID;

    /**
     * @description The ID of the request.
     *
     * @example 2FF6158E-3394-4A90-B634-79C49184****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupJobID' => 'BackupJobID',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupJobID) {
            $res['BackupJobID'] = $this->backupJobID;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBackupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupJobID'])) {
            $model->backupJobID = $map['BackupJobID'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
