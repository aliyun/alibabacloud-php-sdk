<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeModifyParameterLogResponseBody;

use AlibabaCloud\Tea\Model;

class changelogs extends Model
{
    /**
     * @description The effective time.
     *
     * @example 2020-05-05T11:22:22Z
     *
     * @var string
     */
    public $effectTime;

    /**
     * @description The name of the parameter.
     *
     * @example testkey
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description Indicates whether the modification takes effect.
     *
     * @example true
     *
     * @var string
     */
    public $parameterValid;

    /**
     * @description The original value of the parameter.
     *
     * @example 100
     *
     * @var string
     */
    public $parameterValueAfter;

    /**
     * @description The new value of the parameter.
     *
     * @example 200
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return changelogs
     */
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
