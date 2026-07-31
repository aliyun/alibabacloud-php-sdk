<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class AddKnowledgeFileRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $fileLocation;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var bool
     */
    public $isDir;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $uploadUser;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'fileLocation' => 'FileLocation',
        'fileType' => 'FileType',
        'isDir' => 'IsDir',
        'tags' => 'Tags',
        'uploadUser' => 'UploadUser',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->fileLocation) {
            $res['FileLocation'] = $this->fileLocation;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->isDir) {
            $res['IsDir'] = $this->isDir;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        if (null !== $this->uploadUser) {
            $res['UploadUser'] = $this->uploadUser;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['FileLocation'])) {
            $model->fileLocation = $map['FileLocation'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        if (isset($map['IsDir'])) {
            $model->isDir = $map['IsDir'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        if (isset($map['UploadUser'])) {
            $model->uploadUser = $map['UploadUser'];
        }

        return $model;
    }
}
