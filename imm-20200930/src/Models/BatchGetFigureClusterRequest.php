<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class BatchGetFigureClusterRequest extends Model
{
    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string[]
     */
    public $objectIds;

    /**
     * @var string
     */
    public $projectName;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'objectIds' => 'ObjectIds',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
        if (\is_array($this->objectIds)) {
            Model::validateArray($this->objectIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->objectIds) {
            if (\is_array($this->objectIds)) {
                $res['ObjectIds'] = [];
                $n1 = 0;
                foreach ($this->objectIds as $item1) {
                    $res['ObjectIds'][$n1++] = $item1;
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

        if (isset($map['ObjectIds'])) {
            if (!empty($map['ObjectIds'])) {
                $model->objectIds = [];
                $n1 = 0;
                foreach ($map['ObjectIds'] as $item1) {
                    $model->objectIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
