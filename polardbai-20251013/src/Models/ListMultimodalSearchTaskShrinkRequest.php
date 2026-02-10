<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PolardbAI\V20251013\Models;

use AlibabaCloud\Dara\Model;

class ListMultimodalSearchTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $datasetIdsShrink;

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
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'datasetIdsShrink' => 'DatasetIds',
        'inputField' => 'InputField',
        'modelMode' => 'ModelMode',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
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

        if (null !== $this->datasetIdsShrink) {
            $res['DatasetIds'] = $this->datasetIdsShrink;
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
            $model->datasetIdsShrink = $map['DatasetIds'];
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

        return $model;
    }
}
