<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class RecoveryFileRequest extends Model
{
    /**
     * @var string[]
     */
    public $androidInstanceIdList;

    /**
     * @var bool
     */
    public $backupAll;

    /**
     * @var string
     */
    public $backupFileId;

    /**
     * @var string
     */
    public $backupFilePath;

    /**
     * @var string
     */
    public $uploadEndpoint;

    /**
     * @var string
     */
    public $uploadType;
    protected $_name = [
        'androidInstanceIdList' => 'AndroidInstanceIdList',
        'backupAll' => 'BackupAll',
        'backupFileId' => 'BackupFileId',
        'backupFilePath' => 'BackupFilePath',
        'uploadEndpoint' => 'UploadEndpoint',
        'uploadType' => 'UploadType',
    ];

    public function validate()
    {
        if (\is_array($this->androidInstanceIdList)) {
            Model::validateArray($this->androidInstanceIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->androidInstanceIdList) {
            if (\is_array($this->androidInstanceIdList)) {
                $res['AndroidInstanceIdList'] = [];
                $n1 = 0;
                foreach ($this->androidInstanceIdList as $item1) {
                    $res['AndroidInstanceIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->backupAll) {
            $res['BackupAll'] = $this->backupAll;
        }

        if (null !== $this->backupFileId) {
            $res['BackupFileId'] = $this->backupFileId;
        }

        if (null !== $this->backupFilePath) {
            $res['BackupFilePath'] = $this->backupFilePath;
        }

        if (null !== $this->uploadEndpoint) {
            $res['UploadEndpoint'] = $this->uploadEndpoint;
        }

        if (null !== $this->uploadType) {
            $res['UploadType'] = $this->uploadType;
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
        if (isset($map['AndroidInstanceIdList'])) {
            if (!empty($map['AndroidInstanceIdList'])) {
                $model->androidInstanceIdList = [];
                $n1 = 0;
                foreach ($map['AndroidInstanceIdList'] as $item1) {
                    $model->androidInstanceIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BackupAll'])) {
            $model->backupAll = $map['BackupAll'];
        }

        if (isset($map['BackupFileId'])) {
            $model->backupFileId = $map['BackupFileId'];
        }

        if (isset($map['BackupFilePath'])) {
            $model->backupFilePath = $map['BackupFilePath'];
        }

        if (isset($map['UploadEndpoint'])) {
            $model->uploadEndpoint = $map['UploadEndpoint'];
        }

        if (isset($map['UploadType'])) {
            $model->uploadType = $map['UploadType'];
        }

        return $model;
    }
}
