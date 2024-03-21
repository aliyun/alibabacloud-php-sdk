<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeTrademarkDetailForInnerResponseBody;

use AlibabaCloud\Tea\Model;

class flowList extends Model
{
    /**
     * @var string
     */
    public $date;

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

    /**
     * @var string
     */
    public $registrationNumber;
    protected $_name = [
        'date'               => 'Date',
        'procedureCode'      => 'ProcedureCode',
        'procedureDate'      => 'ProcedureDate',
        'procedureName'      => 'ProcedureName',
        'procedureResult'    => 'ProcedureResult',
        'procedureStep'      => 'ProcedureStep',
        'registrationNumber' => 'RegistrationNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
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
        if (null !== $this->procedureResult) {
            $res['ProcedureResult'] = $this->procedureResult;
        }
        if (null !== $this->procedureStep) {
            $res['ProcedureStep'] = $this->procedureStep;
        }
        if (null !== $this->registrationNumber) {
            $res['RegistrationNumber'] = $this->registrationNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
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
        if (isset($map['ProcedureResult'])) {
            $model->procedureResult = $map['ProcedureResult'];
        }
        if (isset($map['ProcedureStep'])) {
            $model->procedureStep = $map['ProcedureStep'];
        }
        if (isset($map['RegistrationNumber'])) {
            $model->registrationNumber = $map['RegistrationNumber'];
        }

        return $model;
    }
}
