<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupTemplateListResponseBody;

use AlibabaCloud\Dara\Model;

class parameters extends Model
{
    /**
     * @var string
     */
    public $checkingCode;

    /**
     * @var int
     */
    public $effective;

    /**
     * @var int
     */
    public $factor;

    /**
     * @var string
     */
    public $parameterDescription;

    /**
     * @var string
     */
    public $parameterName;

    /**
     * @var string
     */
    public $parameterValue;

    /**
     * @var int
     */
    public $revisable;

    /**
     * @var bool
     */
    public $supportModifyForMinorVersion;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'checkingCode' => 'CheckingCode',
        'effective' => 'Effective',
        'factor' => 'Factor',
        'parameterDescription' => 'ParameterDescription',
        'parameterName' => 'ParameterName',
        'parameterValue' => 'ParameterValue',
        'revisable' => 'Revisable',
        'supportModifyForMinorVersion' => 'SupportModifyForMinorVersion',
        'unit' => 'Unit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkingCode) {
            $res['CheckingCode'] = $this->checkingCode;
        }

        if (null !== $this->effective) {
            $res['Effective'] = $this->effective;
        }

        if (null !== $this->factor) {
            $res['Factor'] = $this->factor;
        }

        if (null !== $this->parameterDescription) {
            $res['ParameterDescription'] = $this->parameterDescription;
        }

        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }

        if (null !== $this->parameterValue) {
            $res['ParameterValue'] = $this->parameterValue;
        }

        if (null !== $this->revisable) {
            $res['Revisable'] = $this->revisable;
        }

        if (null !== $this->supportModifyForMinorVersion) {
            $res['SupportModifyForMinorVersion'] = $this->supportModifyForMinorVersion;
        }

        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
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
        if (isset($map['CheckingCode'])) {
            $model->checkingCode = $map['CheckingCode'];
        }

        if (isset($map['Effective'])) {
            $model->effective = $map['Effective'];
        }

        if (isset($map['Factor'])) {
            $model->factor = $map['Factor'];
        }

        if (isset($map['ParameterDescription'])) {
            $model->parameterDescription = $map['ParameterDescription'];
        }

        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }

        if (isset($map['ParameterValue'])) {
            $model->parameterValue = $map['ParameterValue'];
        }

        if (isset($map['Revisable'])) {
            $model->revisable = $map['Revisable'];
        }

        if (isset($map['SupportModifyForMinorVersion'])) {
            $model->supportModifyForMinorVersion = $map['SupportModifyForMinorVersion'];
        }

        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
