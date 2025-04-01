<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeBackupEncryptedStringResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $backupInfoJson;
    protected $_name = [
        'backupInfoJson' => 'BackupInfoJson',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupInfoJson) {
            $res['BackupInfoJson'] = $this->backupInfoJson;
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
        if (isset($map['BackupInfoJson'])) {
            $model->backupInfoJson = $map['BackupInfoJson'];
        }

        return $model;
    }
}
