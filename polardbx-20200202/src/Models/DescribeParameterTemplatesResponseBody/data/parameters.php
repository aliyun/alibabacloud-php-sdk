<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeParameterTemplatesResponseBody\data;

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
    public $dynamic;

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
     * @var int
     */
    public $userChangable;
    protected $_name = [
        'checkingCode' => 'CheckingCode',
        'dynamic' => 'Dynamic',
        'parameterDescription' => 'ParameterDescription',
        'parameterName' => 'ParameterName',
        'parameterValue' => 'ParameterValue',
        'revisable' => 'Revisable',
        'userChangable' => 'UserChangable',
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

        if (null !== $this->dynamic) {
            $res['Dynamic'] = $this->dynamic;
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

        if (null !== $this->userChangable) {
            $res['UserChangable'] = $this->userChangable;
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

        if (isset($map['Dynamic'])) {
            $model->dynamic = $map['Dynamic'];
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

        if (isset($map['UserChangable'])) {
            $model->userChangable = $map['UserChangable'];
        }

        return $model;
    }
}
