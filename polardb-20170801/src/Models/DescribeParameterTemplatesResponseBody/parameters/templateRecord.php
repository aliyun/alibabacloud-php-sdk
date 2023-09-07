<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeParameterTemplatesResponseBody\parameters;

use AlibabaCloud\Tea\Model;

class templateRecord extends Model
{
    /**
     * @description The valid values of the parameter.
     *
     * @example [ROW|STATEMENT|MIXED]
     *
     * @var string
     */
    public $checkingCode;

    /**
     * @description Indicates whether the parameter setting can be modified. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $forceModify;

    /**
     * @description Indicates whether a cluster restart is required to make the parameter modification take effect. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var string
     */
    public $forceRestart;

    /**
     * @description Indicates whether the parameter is a global parameter. Valid values:
     *
     *   **0**: yes. The modified parameter value is synchronized to other nodes by default.
     *   **1**: no. You can customize the nodes to which the modified parameter value can be synchronized.
     *
     * @example 1
     *
     * @var string
     */
    public $isNodeAvailable;

    /**
     * @description The parameter dependencies.
     *
     * @example utf8
     *
     * @var string
     */
    public $paramRelyRule;

    /**
     * @description The description of the parameter.
     *
     * @example What form of binary logging the master will use.
     *
     * @var string
     */
    public $parameterDescription;

    /**
     * @description The name of the parameter.
     *
     * @example binlog_format
     *
     * @var string
     */
    public $parameterName;

    /**
     * @description The default value of the parameter.
     *
     * @example ROW
     *
     * @var string
     */
    public $parameterValue;
    protected $_name = [
        'checkingCode'         => 'CheckingCode',
        'forceModify'          => 'ForceModify',
        'forceRestart'         => 'ForceRestart',
        'isNodeAvailable'      => 'IsNodeAvailable',
        'paramRelyRule'        => 'ParamRelyRule',
        'parameterDescription' => 'ParameterDescription',
        'parameterName'        => 'ParameterName',
        'parameterValue'       => 'ParameterValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkingCode) {
            $res['CheckingCode'] = $this->checkingCode;
        }
        if (null !== $this->forceModify) {
            $res['ForceModify'] = $this->forceModify;
        }
        if (null !== $this->forceRestart) {
            $res['ForceRestart'] = $this->forceRestart;
        }
        if (null !== $this->isNodeAvailable) {
            $res['IsNodeAvailable'] = $this->isNodeAvailable;
        }
        if (null !== $this->paramRelyRule) {
            $res['ParamRelyRule'] = $this->paramRelyRule;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templateRecord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckingCode'])) {
            $model->checkingCode = $map['CheckingCode'];
        }
        if (isset($map['ForceModify'])) {
            $model->forceModify = $map['ForceModify'];
        }
        if (isset($map['ForceRestart'])) {
            $model->forceRestart = $map['ForceRestart'];
        }
        if (isset($map['IsNodeAvailable'])) {
            $model->isNodeAvailable = $map['IsNodeAvailable'];
        }
        if (isset($map['ParamRelyRule'])) {
            $model->paramRelyRule = $map['ParamRelyRule'];
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

        return $model;
    }
}
