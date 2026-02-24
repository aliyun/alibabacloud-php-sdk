<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PolardbAI\V20251013\Models;

use AlibabaCloud\Dara\Model;

class ListMultimodalSearchTaskRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string[]
     */
    public $datasetIds;

    /**
     * @var string
     */
    public $inputField;

    /**
     * @var string
     */
    public $modelMode;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $sourceRegionId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'datasetIds' => 'DatasetIds',
        'inputField' => 'InputField',
        'modelMode' => 'ModelMode',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'sourceRegionId' => 'SourceRegionId',
    ];

    public function validate()
    {
        if (\is_array($this->datasetIds)) {
            Model::validateArray($this->datasetIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->datasetIds) {
            if (\is_array($this->datasetIds)) {
                $res['DatasetIds'] = [];
                $n1 = 0;
                foreach ($this->datasetIds as $item1) {
                    $res['DatasetIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->inputField) {
            $res['InputField'] = $this->inputField;
        }

        if (null !== $this->modelMode) {
            $res['ModelMode'] = $this->modelMode;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->sourceRegionId) {
            $res['SourceRegionId'] = $this->sourceRegionId;
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

        if (isset($map['DatasetIds'])) {
            if (!empty($map['DatasetIds'])) {
                $model->datasetIds = [];
                $n1 = 0;
                foreach ($map['DatasetIds'] as $item1) {
                    $model->datasetIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InputField'])) {
            $model->inputField = $map['InputField'];
        }

        if (isset($map['ModelMode'])) {
            $model->modelMode = $map['ModelMode'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SourceRegionId'])) {
            $model->sourceRegionId = $map['SourceRegionId'];
        }

        return $model;
    }
}
