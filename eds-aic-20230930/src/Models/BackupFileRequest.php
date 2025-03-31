<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class BackupFileRequest extends Model
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
    public $backupFileName;

    /**
     * @var string
     */
    public $backupFilePath;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $sourceAppList;

    /**
     * @var string[]
     */
    public $sourceFilePathList;

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
        'backupFileName' => 'BackupFileName',
        'backupFilePath' => 'BackupFilePath',
        'description' => 'Description',
        'sourceAppList' => 'SourceAppList',
        'sourceFilePathList' => 'SourceFilePathList',
        'uploadEndpoint' => 'UploadEndpoint',
        'uploadType' => 'UploadType',
    ];

    public function validate()
    {
        if (\is_array($this->androidInstanceIdList)) {
            Model::validateArray($this->androidInstanceIdList);
        }
        if (\is_array($this->sourceAppList)) {
            Model::validateArray($this->sourceAppList);
        }
        if (\is_array($this->sourceFilePathList)) {
            Model::validateArray($this->sourceFilePathList);
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
                    $res['AndroidInstanceIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->backupAll) {
            $res['BackupAll'] = $this->backupAll;
        }

        if (null !== $this->backupFileName) {
            $res['BackupFileName'] = $this->backupFileName;
        }

        if (null !== $this->backupFilePath) {
            $res['BackupFilePath'] = $this->backupFilePath;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->sourceAppList) {
            if (\is_array($this->sourceAppList)) {
                $res['SourceAppList'] = [];
                $n1 = 0;
                foreach ($this->sourceAppList as $item1) {
                    $res['SourceAppList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sourceFilePathList) {
            if (\is_array($this->sourceFilePathList)) {
                $res['SourceFilePathList'] = [];
                $n1 = 0;
                foreach ($this->sourceFilePathList as $item1) {
                    $res['SourceFilePathList'][$n1++] = $item1;
                }
            }
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
                    $model->androidInstanceIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['BackupAll'])) {
            $model->backupAll = $map['BackupAll'];
        }

        if (isset($map['BackupFileName'])) {
            $model->backupFileName = $map['BackupFileName'];
        }

        if (isset($map['BackupFilePath'])) {
            $model->backupFilePath = $map['BackupFilePath'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['SourceAppList'])) {
            if (!empty($map['SourceAppList'])) {
                $model->sourceAppList = [];
                $n1 = 0;
                foreach ($map['SourceAppList'] as $item1) {
                    $model->sourceAppList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SourceFilePathList'])) {
            if (!empty($map['SourceFilePathList'])) {
                $model->sourceFilePathList = [];
                $n1 = 0;
                foreach ($map['SourceFilePathList'] as $item1) {
                    $model->sourceFilePathList[$n1++] = $item1;
                }
            }
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
