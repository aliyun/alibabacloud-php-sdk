<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20211130\Models;

use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\CreateComputeTaskByDataSetIdRequest\batchInfoForm;
use AlibabaCloud\Tea\Model;

class CreateComputeTaskByDataSetIdRequest extends Model
{
    /**
     * @var batchInfoForm[]
     */
    public $batchInfoForm;

    /**
     * @var int
     */
    public $datasetId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $remarks;
    protected $_name = [
        'batchInfoForm' => 'BatchInfoForm',
        'datasetId'     => 'DatasetId',
        'name'          => 'Name',
        'remarks'       => 'Remarks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchInfoForm) {
            $res['BatchInfoForm'] = [];
            if (null !== $this->batchInfoForm && \is_array($this->batchInfoForm)) {
                $n = 0;
                foreach ($this->batchInfoForm as $item) {
                    $res['BatchInfoForm'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->remarks) {
            $res['Remarks'] = $this->remarks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateComputeTaskByDataSetIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchInfoForm'])) {
            if (!empty($map['BatchInfoForm'])) {
                $model->batchInfoForm = [];
                $n                    = 0;
                foreach ($map['BatchInfoForm'] as $item) {
                    $model->batchInfoForm[$n++] = null !== $item ? batchInfoForm::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Remarks'])) {
            $model->remarks = $map['Remarks'];
        }

        return $model;
    }
}
