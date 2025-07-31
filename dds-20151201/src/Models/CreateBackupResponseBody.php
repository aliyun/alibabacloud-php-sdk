<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class CreateBackupResponseBody extends Model
{
    /**
     * @description The ID of the backup set.
     *
     * @example 5664****
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The request ID.
     *
     * @example 7016B12F-7F64-40A4-BAFF-013F02AC82FC
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupId' => 'BackupId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
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
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
