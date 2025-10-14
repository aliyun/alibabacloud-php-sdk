<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataSetsResponseBody\dataSets;

use AlibabaCloud\Dara\Model;

class dataSetReferences extends Model
{
    /**
     * @var string
     */
    public $dataSetId;

    /**
     * @var string
     */
    public $dataSetReferenceId;

    /**
     * @var string
     */
    public $dataSetReferenceName;

    /**
     * @var string
     */
    public $dataSetReferenceType;
    protected $_name = [
        'dataSetId' => 'DataSetId',
        'dataSetReferenceId' => 'DataSetReferenceId',
        'dataSetReferenceName' => 'DataSetReferenceName',
        'dataSetReferenceType' => 'DataSetReferenceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSetId) {
            $res['DataSetId'] = $this->dataSetId;
        }

        if (null !== $this->dataSetReferenceId) {
            $res['DataSetReferenceId'] = $this->dataSetReferenceId;
        }

        if (null !== $this->dataSetReferenceName) {
            $res['DataSetReferenceName'] = $this->dataSetReferenceName;
        }

        if (null !== $this->dataSetReferenceType) {
            $res['DataSetReferenceType'] = $this->dataSetReferenceType;
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
        if (isset($map['DataSetId'])) {
            $model->dataSetId = $map['DataSetId'];
        }

        if (isset($map['DataSetReferenceId'])) {
            $model->dataSetReferenceId = $map['DataSetReferenceId'];
        }

        if (isset($map['DataSetReferenceName'])) {
            $model->dataSetReferenceName = $map['DataSetReferenceName'];
        }

        if (isset($map['DataSetReferenceType'])) {
            $model->dataSetReferenceType = $map['DataSetReferenceType'];
        }

        return $model;
    }
}
