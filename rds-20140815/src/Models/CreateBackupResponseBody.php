<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class CreateBackupResponseBody extends Model
{
    /**
     * @var string
     */
    public $backupJobId;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupJobId' => 'BackupJobId',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupJobId) {
            $res['BackupJobId'] = $this->backupJobId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupJobId'])) {
            $model->backupJobId = $map['BackupJobId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
