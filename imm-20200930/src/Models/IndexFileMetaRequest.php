<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class IndexFileMetaRequest extends Model
{
    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var InputFile
     */
    public $file;

    /**
     * @var Notification
     */
    public $notification;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'file' => 'File',
        'notification' => 'Notification',
        'projectName' => 'ProjectName',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        if (null !== $this->file) {
            $this->file->validate();
        }
        if (null !== $this->notification) {
            $this->notification->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->file) {
            $res['File'] = null !== $this->file ? $this->file->toArray($noStream) : $this->file;
        }

        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toArray($noStream) : $this->notification;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['File'])) {
            $model->file = InputFile::fromMap($map['File']);
        }

        if (isset($map['Notification'])) {
            $model->notification = Notification::fromMap($map['Notification']);
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
