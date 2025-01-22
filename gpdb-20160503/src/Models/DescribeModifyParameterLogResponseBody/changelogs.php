<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeModifyParameterLogResponseBody;

use AlibabaCloud\Dara\Model;

class changelogs extends Model
{
    /**
     * @var string
     */
    public $effectTime;
    /**
     * @var string
     */
    public $parameterName;
    /**
     * @var string
     */
    public $parameterValid;
    /**
     * @var string
     */
    public $parameterValueAfter;
    /**
     * @var string
     */
    public $parameterValueBefore;
    protected $_name = [
        'effectTime'           => 'EffectTime',
        'parameterName'        => 'ParameterName',
        'parameterValid'       => 'ParameterValid',
        'parameterValueAfter'  => 'ParameterValueAfter',
        'parameterValueBefore' => 'ParameterValueBefore',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effectTime) {
            $res['EffectTime'] = $this->effectTime;
        }

        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }

        if (null !== $this->parameterValid) {
            $res['ParameterValid'] = $this->parameterValid;
        }

        if (null !== $this->parameterValueAfter) {
            $res['ParameterValueAfter'] = $this->parameterValueAfter;
        }

        if (null !== $this->parameterValueBefore) {
            $res['ParameterValueBefore'] = $this->parameterValueBefore;
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
        if (isset($map['EffectTime'])) {
            $model->effectTime = $map['EffectTime'];
        }

        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }

        if (isset($map['ParameterValid'])) {
            $model->parameterValid = $map['ParameterValid'];
        }

        if (isset($map['ParameterValueAfter'])) {
            $model->parameterValueAfter = $map['ParameterValueAfter'];
        }

        if (isset($map['ParameterValueBefore'])) {
            $model->parameterValueBefore = $map['ParameterValueBefore'];
        }

        return $model;
    }
}
