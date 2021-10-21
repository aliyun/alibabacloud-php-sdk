<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\DescirbeCombineTrademarkResponseBody\data;

use AlibabaCloud\Tea\Model;

class procedures extends Model
{
    /**
     * @var string
     */
    public $procedureStep;

    /**
     * @var string
     */
    public $procedureResult;

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
    protected $_name = [
        'procedureStep'   => 'ProcedureStep',
        'procedureResult' => 'ProcedureResult',
        'procedureCode'   => 'ProcedureCode',
        'procedureDate'   => 'ProcedureDate',
        'procedureName'   => 'ProcedureName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->procedureStep) {
            $res['ProcedureStep'] = $this->procedureStep;
        }
        if (null !== $this->procedureResult) {
            $res['ProcedureResult'] = $this->procedureResult;
        }
        if (null !== $this->procedureCode) {
            $res['ProcedureCode'] = $this->procedureCode;
        }
        if (null !== $this->procedureDate) {
            $res['ProcedureDate'] = $this->procedureDate;
        }
        if (null !== $this->procedureName) {
            $res['ProcedureName'] = $this->procedureName;
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
        if (isset($map['ProcedureStep'])) {
            $model->procedureStep = $map['ProcedureStep'];
        }
        if (isset($map['ProcedureResult'])) {
            $model->procedureResult = $map['ProcedureResult'];
        }
        if (isset($map['ProcedureCode'])) {
            $model->procedureCode = $map['ProcedureCode'];
        }
        if (isset($map['ProcedureDate'])) {
            $model->procedureDate = $map['ProcedureDate'];
        }
        if (isset($map['ProcedureName'])) {
            $model->procedureName = $map['ProcedureName'];
        }

        return $model;
    }
}
