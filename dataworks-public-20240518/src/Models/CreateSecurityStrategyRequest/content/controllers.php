<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateSecurityStrategyRequest\content;

use AlibabaCloud\Dara\Model;

class controllers extends Model
{
    /**
     * @var mixed
     */
    public $basicEditionDefaultValue;

    /**
     * @var int[]
     */
    public $basicEditionIntervalValue;

    /**
     * @var string
     */
    public $controller;

    /**
     * @var string
     */
    public $controllerValueType;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $displayNameEn;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var mixed
     */
    public $enterpriseEditionDefaultValue;

    /**
     * @var int[]
     */
    public $enterpriseEditionIntervalValue;

    /**
     * @var mixed
     */
    public $professionalEditionDefaultValue;

    /**
     * @var int[]
     */
    public $professionalEditionIntervalValue;

    /**
     * @var mixed
     */
    public $standardEditionDefaultValue;

    /**
     * @var int[]
     */
    public $standardEditionIntervalValue;

    /**
     * @var mixed
     */
    public $userConfigValue;
    protected $_name = [
        'basicEditionDefaultValue' => 'BasicEditionDefaultValue',
        'basicEditionIntervalValue' => 'BasicEditionIntervalValue',
        'controller' => 'Controller',
        'controllerValueType' => 'ControllerValueType',
        'displayName' => 'DisplayName',
        'displayNameEn' => 'DisplayNameEn',
        'enable' => 'Enable',
        'enterpriseEditionDefaultValue' => 'EnterpriseEditionDefaultValue',
        'enterpriseEditionIntervalValue' => 'EnterpriseEditionIntervalValue',
        'professionalEditionDefaultValue' => 'ProfessionalEditionDefaultValue',
        'professionalEditionIntervalValue' => 'ProfessionalEditionIntervalValue',
        'standardEditionDefaultValue' => 'StandardEditionDefaultValue',
        'standardEditionIntervalValue' => 'StandardEditionIntervalValue',
        'userConfigValue' => 'UserConfigValue',
    ];

    public function validate()
    {
        if (\is_array($this->basicEditionIntervalValue)) {
            Model::validateArray($this->basicEditionIntervalValue);
        }
        if (\is_array($this->enterpriseEditionIntervalValue)) {
            Model::validateArray($this->enterpriseEditionIntervalValue);
        }
        if (\is_array($this->professionalEditionIntervalValue)) {
            Model::validateArray($this->professionalEditionIntervalValue);
        }
        if (\is_array($this->standardEditionIntervalValue)) {
            Model::validateArray($this->standardEditionIntervalValue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->basicEditionDefaultValue) {
            $res['BasicEditionDefaultValue'] = $this->basicEditionDefaultValue;
        }

        if (null !== $this->basicEditionIntervalValue) {
            if (\is_array($this->basicEditionIntervalValue)) {
                $res['BasicEditionIntervalValue'] = [];
                $n1 = 0;
                foreach ($this->basicEditionIntervalValue as $item1) {
                    $res['BasicEditionIntervalValue'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->controller) {
            $res['Controller'] = $this->controller;
        }

        if (null !== $this->controllerValueType) {
            $res['ControllerValueType'] = $this->controllerValueType;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->displayNameEn) {
            $res['DisplayNameEn'] = $this->displayNameEn;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->enterpriseEditionDefaultValue) {
            $res['EnterpriseEditionDefaultValue'] = $this->enterpriseEditionDefaultValue;
        }

        if (null !== $this->enterpriseEditionIntervalValue) {
            if (\is_array($this->enterpriseEditionIntervalValue)) {
                $res['EnterpriseEditionIntervalValue'] = [];
                $n1 = 0;
                foreach ($this->enterpriseEditionIntervalValue as $item1) {
                    $res['EnterpriseEditionIntervalValue'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->professionalEditionDefaultValue) {
            $res['ProfessionalEditionDefaultValue'] = $this->professionalEditionDefaultValue;
        }

        if (null !== $this->professionalEditionIntervalValue) {
            if (\is_array($this->professionalEditionIntervalValue)) {
                $res['ProfessionalEditionIntervalValue'] = [];
                $n1 = 0;
                foreach ($this->professionalEditionIntervalValue as $item1) {
                    $res['ProfessionalEditionIntervalValue'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->standardEditionDefaultValue) {
            $res['StandardEditionDefaultValue'] = $this->standardEditionDefaultValue;
        }

        if (null !== $this->standardEditionIntervalValue) {
            if (\is_array($this->standardEditionIntervalValue)) {
                $res['StandardEditionIntervalValue'] = [];
                $n1 = 0;
                foreach ($this->standardEditionIntervalValue as $item1) {
                    $res['StandardEditionIntervalValue'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userConfigValue) {
            $res['UserConfigValue'] = $this->userConfigValue;
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
        if (isset($map['BasicEditionDefaultValue'])) {
            $model->basicEditionDefaultValue = $map['BasicEditionDefaultValue'];
        }

        if (isset($map['BasicEditionIntervalValue'])) {
            if (!empty($map['BasicEditionIntervalValue'])) {
                $model->basicEditionIntervalValue = [];
                $n1 = 0;
                foreach ($map['BasicEditionIntervalValue'] as $item1) {
                    $model->basicEditionIntervalValue[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Controller'])) {
            $model->controller = $map['Controller'];
        }

        if (isset($map['ControllerValueType'])) {
            $model->controllerValueType = $map['ControllerValueType'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['DisplayNameEn'])) {
            $model->displayNameEn = $map['DisplayNameEn'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['EnterpriseEditionDefaultValue'])) {
            $model->enterpriseEditionDefaultValue = $map['EnterpriseEditionDefaultValue'];
        }

        if (isset($map['EnterpriseEditionIntervalValue'])) {
            if (!empty($map['EnterpriseEditionIntervalValue'])) {
                $model->enterpriseEditionIntervalValue = [];
                $n1 = 0;
                foreach ($map['EnterpriseEditionIntervalValue'] as $item1) {
                    $model->enterpriseEditionIntervalValue[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProfessionalEditionDefaultValue'])) {
            $model->professionalEditionDefaultValue = $map['ProfessionalEditionDefaultValue'];
        }

        if (isset($map['ProfessionalEditionIntervalValue'])) {
            if (!empty($map['ProfessionalEditionIntervalValue'])) {
                $model->professionalEditionIntervalValue = [];
                $n1 = 0;
                foreach ($map['ProfessionalEditionIntervalValue'] as $item1) {
                    $model->professionalEditionIntervalValue[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StandardEditionDefaultValue'])) {
            $model->standardEditionDefaultValue = $map['StandardEditionDefaultValue'];
        }

        if (isset($map['StandardEditionIntervalValue'])) {
            if (!empty($map['StandardEditionIntervalValue'])) {
                $model->standardEditionIntervalValue = [];
                $n1 = 0;
                foreach ($map['StandardEditionIntervalValue'] as $item1) {
                    $model->standardEditionIntervalValue[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserConfigValue'])) {
            $model->userConfigValue = $map['UserConfigValue'];
        }

        return $model;
    }
}
