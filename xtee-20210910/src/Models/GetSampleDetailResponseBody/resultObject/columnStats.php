<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\GetSampleDetailResponseBody\resultObject;

use AlibabaCloud\Dara\Model;

class columnStats extends Model
{
    /**
     * @var int
     */
    public $distinctNumber;

    /**
     * @var string
     */
    public $distinctRate;

    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var int
     */
    public $missNumber;

    /**
     * @var string
     */
    public $missRate;

    /**
     * @var int
     */
    public $rowNumber;
    protected $_name = [
        'distinctNumber' => 'DistinctNumber',
        'distinctRate' => 'DistinctRate',
        'fieldName' => 'FieldName',
        'missNumber' => 'MissNumber',
        'missRate' => 'MissRate',
        'rowNumber' => 'RowNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->distinctNumber) {
            $res['DistinctNumber'] = $this->distinctNumber;
        }

        if (null !== $this->distinctRate) {
            $res['DistinctRate'] = $this->distinctRate;
        }

        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }

        if (null !== $this->missNumber) {
            $res['MissNumber'] = $this->missNumber;
        }

        if (null !== $this->missRate) {
            $res['MissRate'] = $this->missRate;
        }

        if (null !== $this->rowNumber) {
            $res['RowNumber'] = $this->rowNumber;
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
        if (isset($map['DistinctNumber'])) {
            $model->distinctNumber = $map['DistinctNumber'];
        }

        if (isset($map['DistinctRate'])) {
            $model->distinctRate = $map['DistinctRate'];
        }

        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }

        if (isset($map['MissNumber'])) {
            $model->missNumber = $map['MissNumber'];
        }

        if (isset($map['MissRate'])) {
            $model->missRate = $map['MissRate'];
        }

        if (isset($map['RowNumber'])) {
            $model->rowNumber = $map['RowNumber'];
        }

        return $model;
    }
}
