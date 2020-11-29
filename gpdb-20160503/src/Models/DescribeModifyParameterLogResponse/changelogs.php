<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeModifyParameterLogResponse;

use AlibabaCloud\Tea\Model;

class changelogs extends Model
{
    /**
     * @var string
     */
    public $parameterName;

    /**
     * @var string
     */
    public $parameterValueBefore;

    /**
     * @var string
     */
    public $parameterValueAfter;

    /**
     * @var string
     */
    public $parameterValid;

    /**
     * @var string
     */
    public $effectTime;
    protected $_name = [
        'parameterName'        => 'ParameterName',
        'parameterValueBefore' => 'ParameterValueBefore',
        'parameterValueAfter'  => 'ParameterValueAfter',
        'parameterValid'       => 'ParameterValid',
        'effectTime'           => 'EffectTime',
    ];

    public function validate()
    {
        Model::validateRequired('parameterName', $this->parameterName, true);
        Model::validateRequired('parameterValueBefore', $this->parameterValueBefore, true);
        Model::validateRequired('parameterValueAfter', $this->parameterValueAfter, true);
        Model::validateRequired('parameterValid', $this->parameterValid, true);
        Model::validateRequired('effectTime', $this->effectTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }
        if (null !== $this->parameterValueBefore) {
            $res['ParameterValueBefore'] = $this->parameterValueBefore;
        }
        if (null !== $this->parameterValueAfter) {
            $res['ParameterValueAfter'] = $this->parameterValueAfter;
        }
        if (null !== $this->parameterValid) {
            $res['ParameterValid'] = $this->parameterValid;
        }
        if (null !== $this->effectTime) {
            $res['EffectTime'] = $this->effectTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changelogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }
        if (isset($map['ParameterValueBefore'])) {
            $model->parameterValueBefore = $map['ParameterValueBefore'];
        }
        if (isset($map['ParameterValueAfter'])) {
            $model->parameterValueAfter = $map['ParameterValueAfter'];
        }
        if (isset($map['ParameterValid'])) {
            $model->parameterValid = $map['ParameterValid'];
        }
        if (isset($map['EffectTime'])) {
            $model->effectTime = $map['EffectTime'];
        }

        return $model;
    }
}
