<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupDirsResponseBody;

use AlibabaCloud\Tea\Model;

class backupDirs extends Model
{
    /**
     * @var string
     */
    public $source;

    /**
     * @var int
     */
    public $backupJobId;
    protected $_name = [
        'source'      => 'Source',
        'backupJobId' => 'BackupJobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->backupJobId) {
            $res['BackupJobId'] = $this->backupJobId;
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
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['BackupJobId'])) {
            $model->backupJobId = $map['BackupJobId'];
        }

        return $model;
    }
}
