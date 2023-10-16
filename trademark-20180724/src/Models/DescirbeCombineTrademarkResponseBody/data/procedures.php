<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\DescirbeCombineTrademarkResponseBody\data;

use AlibabaCloud\Tea\Model;

class procedures extends Model
{
    /**
     * @var string
     */
    public $procedureCode;

    /**
     * @var string
     */
    public $procedureDate;

    /**
     * @var string
     */
    public $procedureName;

    /**
     * @var string
     */
    public $procedureResult;

    /**
     * @var string
     */
    public $procedureStep;
    protected $_name = [
        'procedureCode'   => 'ProcedureCode',
        'procedureDate'   => 'ProcedureDate',
        'procedureName'   => 'ProcedureName',
        'procedureResult' => 'ProcedureResult',
        'procedureStep'   => 'ProcedureStep',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->procedureCode) {
            $res['ProcedureCode'] = $this->procedureCode;
        }
        if (null !== $this->procedureDate) {
            $res['ProcedureDate'] = $this->procedureDate;
        }
        if (null !== $this->procedureName) {
            $res['ProcedureName'] = $this->procedureName;
        }
        if (null !== $this->procedureResult) {
            $res['ProcedureResult'] = $this->procedureResult;
        }
        if (null !== $this->procedureStep) {
            $res['ProcedureStep'] = $this->procedureStep;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return procedures
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProcedureCode'])) {
            $model->procedureCode = $map['ProcedureCode'];
        }
        if (isset($map['ProcedureDate'])) {
            $model->procedureDate = $map['ProcedureDate'];
        }
        if (isset($map['ProcedureName'])) {
            $model->procedureName = $map['ProcedureName'];
        }
        if (isset($map['ProcedureResult'])) {
            $model->procedureResult = $map['ProcedureResult'];
        }
        if (isset($map['ProcedureStep'])) {
            $model->procedureStep = $map['ProcedureStep'];
        }

        return $model;
    }
}
