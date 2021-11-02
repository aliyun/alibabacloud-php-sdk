<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupDirsResponseBody;

use AlibabaCloud\Tea\Model;

class backupDirs extends Model
{
    /**
     * @var int
     */
    public $backupJobId;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'backupJobId' => 'BackupJobId',
        'source'      => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupJobId) {
            $res['BackupJobId'] = $this->backupJobId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupDirs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupJobId'])) {
            $model->backupJobId = $map['BackupJobId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
