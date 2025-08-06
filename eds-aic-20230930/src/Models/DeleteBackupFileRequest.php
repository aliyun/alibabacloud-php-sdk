<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DeleteBackupFileRequest extends Model
{
    /**
     * @var string[]
     */
    public $backupFileIdList;
    protected $_name = [
        'backupFileIdList' => 'BackupFileIdList',
    ];

    public function validate()
    {
        if (\is_array($this->backupFileIdList)) {
            Model::validateArray($this->backupFileIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupFileIdList) {
            if (\is_array($this->backupFileIdList)) {
                $res['BackupFileIdList'] = [];
                $n1 = 0;
                foreach ($this->backupFileIdList as $item1) {
                    $res['BackupFileIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['BackupFileIdList'])) {
            if (!empty($map['BackupFileIdList'])) {
                $model->backupFileIdList = [];
                $n1 = 0;
                foreach ($map['BackupFileIdList'] as $item1) {
                    $model->backupFileIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
