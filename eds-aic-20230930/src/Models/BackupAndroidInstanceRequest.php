<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class BackupAndroidInstanceRequest extends Model
{
    /**
     * @var string[]
     */
    public $androidInstanceIdList;

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
     * @var string
     */
    public $uploadEndpoint;
    protected $_name = [
        'androidInstanceIdList' => 'AndroidInstanceIdList',
        'backupFileName' => 'BackupFileName',
        'backupFilePath' => 'BackupFilePath',
        'description' => 'Description',
        'uploadEndpoint' => 'UploadEndpoint',
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

        if (null !== $this->backupFileName) {
            $res['BackupFileName'] = $this->backupFileName;
        }

        if (null !== $this->backupFilePath) {
            $res['BackupFilePath'] = $this->backupFilePath;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->uploadEndpoint) {
            $res['UploadEndpoint'] = $this->uploadEndpoint;
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

        if (isset($map['BackupFileName'])) {
            $model->backupFileName = $map['BackupFileName'];
        }

        if (isset($map['BackupFilePath'])) {
            $model->backupFilePath = $map['BackupFilePath'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['UploadEndpoint'])) {
            $model->uploadEndpoint = $map['UploadEndpoint'];
        }

        return $model;
    }
}
