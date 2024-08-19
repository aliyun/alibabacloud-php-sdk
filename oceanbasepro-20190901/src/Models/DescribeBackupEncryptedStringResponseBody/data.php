<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeBackupEncryptedStringResponseBody;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupInfoJson) {
            $res['BackupInfoJson'] = $this->backupInfoJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupInfoJson'])) {
            $model->backupInfoJson = $map['BackupInfoJson'];
        }

        return $model;
    }
}
