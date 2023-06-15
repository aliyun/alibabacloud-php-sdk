<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ImportUserBackupFileResponseBody extends Model
{
    /**
     * @description The ID of the full backup file.
     *
     * @example b-n8tpg24c6i0v********
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The ID of the request.
     *
     * @example A140DD14-DCC9-4548-9C72-52A49A58A310
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the full backup file is successfully imported into the instance. If the full backup file is successfully imported, **true** is returned. Otherwise, an error message is returned.
     *
     * @example true
     *
     * @var bool
     */
    public $status;
    protected $_name = [
        'backupId'  => 'BackupId',
        'requestId' => 'RequestId',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportUserBackupFileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
