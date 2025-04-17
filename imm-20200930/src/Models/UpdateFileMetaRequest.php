<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class UpdateFileMetaRequest extends Model
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
     * @var string
     */
    public $projectName;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'file' => 'File',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
        if (null !== $this->file) {
            $this->file->validate();
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

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
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

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
