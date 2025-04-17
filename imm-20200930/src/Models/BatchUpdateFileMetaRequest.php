<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class BatchUpdateFileMetaRequest extends Model
{
    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var InputFile[]
     */
    public $files;

    /**
     * @var string
     */
    public $projectName;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'files' => 'Files',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
        if (\is_array($this->files)) {
            Model::validateArray($this->files);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->files) {
            if (\is_array($this->files)) {
                $res['Files'] = [];
                $n1 = 0;
                foreach ($this->files as $item1) {
                    $res['Files'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['Files'])) {
            if (!empty($map['Files'])) {
                $model->files = [];
                $n1 = 0;
                foreach ($map['Files'] as $item1) {
                    $model->files[$n1++] = InputFile::fromMap($item1);
                }
            }
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
