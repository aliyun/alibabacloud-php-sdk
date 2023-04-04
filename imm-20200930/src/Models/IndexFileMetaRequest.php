<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class IndexFileMetaRequest extends Model
{
    /**
     * @example test-dataset
     *
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
     * @example test-project
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'datasetName'  => 'DatasetName',
        'file'         => 'File',
        'notification' => 'Notification',
        'projectName'  => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->file) {
            $res['File'] = null !== $this->file ? $this->file->toMap() : null;
        }
        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toMap() : null;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IndexFileMetaRequest
     */
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

        return $model;
    }
}
