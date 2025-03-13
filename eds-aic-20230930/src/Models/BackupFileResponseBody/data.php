<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\BackupFileResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Instance id.
     *
     * @example acp-34pqe4r0kd9kn****
     *
     * @var string
     */
    public $androidInstanceId;

    /**
     * @description Backup file id.
     *
     * @example bf-b0qbg3pbpjkn7****
     *
     * @var string
     */
    public $backupFileId;

    /**
     * @description Backup file name.
     *
     * @example a-58ftsoo90p0qa****.ab
     *
     * @var string
     */
    public $backupFileName;

    /**
     * @description The task ID.
     *
     * @example t-22ex666a5mco5****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'androidInstanceId' => 'AndroidInstanceId',
        'backupFileId'      => 'BackupFileId',
        'backupFileName'    => 'BackupFileName',
        'taskId'            => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceId) {
            $res['AndroidInstanceId'] = $this->androidInstanceId;
        }
        if (null !== $this->backupFileId) {
            $res['BackupFileId'] = $this->backupFileId;
        }
        if (null !== $this->backupFileName) {
            $res['BackupFileName'] = $this->backupFileName;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['AndroidInstanceId'])) {
            $model->androidInstanceId = $map['AndroidInstanceId'];
        }
        if (isset($map['BackupFileId'])) {
            $model->backupFileId = $map['BackupFileId'];
        }
        if (isset($map['BackupFileName'])) {
            $model->backupFileName = $map['BackupFileName'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
