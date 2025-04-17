<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class GetFileMetaRequest extends Model
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
     * @var string
     */
    public $URI;

    /**
     * @var string[]
     */
    public $withFields;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'projectName' => 'ProjectName',
        'URI' => 'URI',
        'withFields' => 'WithFields',
    ];

    public function validate()
    {
        if (\is_array($this->withFields)) {
            Model::validateArray($this->withFields);
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

        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        if (null !== $this->withFields) {
            if (\is_array($this->withFields)) {
                $res['WithFields'] = [];
                $n1 = 0;
                foreach ($this->withFields as $item1) {
                    $res['WithFields'][$n1++] = $item1;
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

        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        if (isset($map['WithFields'])) {
            if (!empty($map['WithFields'])) {
                $model->withFields = [];
                $n1 = 0;
                foreach ($map['WithFields'] as $item1) {
                    $model->withFields[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
