<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class BatchDeleteFileMetaRequest extends Model
{
    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string[]
     */
    public $URIs;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'projectName' => 'ProjectName',
        'URIs' => 'URIs',
    ];

    public function validate()
    {
        if (\is_array($this->URIs)) {
            Model::validateArray($this->URIs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->URIs) {
            if (\is_array($this->URIs)) {
                $res['URIs'] = [];
                $n1 = 0;
                foreach ($this->URIs as $item1) {
                    $res['URIs'][$n1++] = $item1;
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
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['URIs'])) {
            if (!empty($map['URIs'])) {
                $model->URIs = [];
                $n1 = 0;
                foreach ($map['URIs'] as $item1) {
                    $model->URIs[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
