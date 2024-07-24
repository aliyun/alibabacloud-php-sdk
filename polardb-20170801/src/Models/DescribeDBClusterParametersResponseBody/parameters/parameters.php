<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersResponseBody\parameters;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @description Indicates whether the source and current parameters have the same value.
     *
     * @example true
     *
     * @var string
     */
    public $isEqual;

    /**
     * @description Indicate whether the parameter is a primary parameter of the destination cluster. Valid values:
     *
     *   **1**: The parameter is a primary parameter of the destination cluster.
     *   **0**: The parameter is not a primary parameter of the destination cluster.
     *
     * @example 1
     *
     * @var string
     */
    public $isInstancePolarDBKey;

    /**
     * @description Indicate whether the parameter is a primary parameter of the source instance. Valid values:
     *
     *   **1**: The parameter is a primary parameter of the source instance.
     *   **0**: The parameter is not a primary parameter of the source instance.
     *
     * @example 0
     *
     * @var string
     */
    public $isInstanceRdsKey;

    /**
     * @description Indicate whether the parameter is a primary parameter of the destination cluster. Valid values:
     *
     *   **1**: The parameter is a primary parameter of the destination cluster.
     *   **0**: The parameter is not a primary parameter of the destination cluster.
     *
     * @example 0
     *
     * @var string
     */
    public $isPolarDBKey;

    /**
     * @description Indicate whether the parameter is a primary parameter of the source instance. Valid values:
     *
     *   **1**: The parameter is a primary parameter of the source instance.
     *   **0**: The parameter is not a primary parameter of the source instance.
     *
     * @example 1
     *
     * @var string
     */
    public $isRdsKey;

    /**
     * @description The description of the parameter of the destination cluster.
     *
     * @example The server\\"s default character set.
     *
     * @var string
     */
    public $distParameterDescription;

    /**
     * @description The name of the parameter of the destination cluster.
     *
     * @example character_set_server
     *
     * @var string
     */
    public $distParameterName;

    /**
     * @description The valid values of the parameter of the destination cluster.
     *
     * @example - utf8
     * - gbk
     * @var string
     */
    public $distParameterOptional;

    /**
     * @description The value of the parameter of the destination cluster.
     *
     * @example utf8
     *
     * @var string
     */
    public $distParameterValue;

    /**
     * @description The description of the parameter of the source instance.
     *
     * @example The server\\"s default character set.
     *
     * @var string
     */
    public $rdsParameterDescription;

    /**
     * @description The name of the parameter of the source instance.
     *
     * @example character_set_server
     *
     * @var string
     */
    public $rdsParameterName;

    /**
     * @description The valid values of the parameter of the source instance.
     *
     * @example - utf8
     * - gbk
     * @var string
     */
    public $rdsParameterOptional;

    /**
     * @description The value of the parameter of the source instance.
     *
     * @example utf8
     *
     * @var string
     */
    public $rdsParameterValue;
    protected $_name = [
        'isEqual'                  => 'IsEqual',
        'isInstancePolarDBKey'     => 'IsInstancePolarDBKey',
        'isInstanceRdsKey'         => 'IsInstanceRdsKey',
        'isPolarDBKey'             => 'IsPolarDBKey',
        'isRdsKey'                 => 'IsRdsKey',
        'distParameterDescription' => 'distParameterDescription',
        'distParameterName'        => 'distParameterName',
        'distParameterOptional'    => 'distParameterOptional',
        'distParameterValue'       => 'distParameterValue',
        'rdsParameterDescription'  => 'rdsParameterDescription',
        'rdsParameterName'         => 'rdsParameterName',
        'rdsParameterOptional'     => 'rdsParameterOptional',
        'rdsParameterValue'        => 'rdsParameterValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isEqual) {
            $res['IsEqual'] = $this->isEqual;
        }
        if (null !== $this->isInstancePolarDBKey) {
            $res['IsInstancePolarDBKey'] = $this->isInstancePolarDBKey;
        }
        if (null !== $this->isInstanceRdsKey) {
            $res['IsInstanceRdsKey'] = $this->isInstanceRdsKey;
        }
        if (null !== $this->isPolarDBKey) {
            $res['IsPolarDBKey'] = $this->isPolarDBKey;
        }
        if (null !== $this->isRdsKey) {
            $res['IsRdsKey'] = $this->isRdsKey;
        }
        if (null !== $this->distParameterDescription) {
            $res['distParameterDescription'] = $this->distParameterDescription;
        }
        if (null !== $this->distParameterName) {
            $res['distParameterName'] = $this->distParameterName;
        }
        if (null !== $this->distParameterOptional) {
            $res['distParameterOptional'] = $this->distParameterOptional;
        }
        if (null !== $this->distParameterValue) {
            $res['distParameterValue'] = $this->distParameterValue;
        }
        if (null !== $this->rdsParameterDescription) {
            $res['rdsParameterDescription'] = $this->rdsParameterDescription;
        }
        if (null !== $this->rdsParameterName) {
            $res['rdsParameterName'] = $this->rdsParameterName;
        }
        if (null !== $this->rdsParameterOptional) {
            $res['rdsParameterOptional'] = $this->rdsParameterOptional;
        }
        if (null !== $this->rdsParameterValue) {
            $res['rdsParameterValue'] = $this->rdsParameterValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsEqual'])) {
            $model->isEqual = $map['IsEqual'];
        }
        if (isset($map['IsInstancePolarDBKey'])) {
            $model->isInstancePolarDBKey = $map['IsInstancePolarDBKey'];
        }
        if (isset($map['IsInstanceRdsKey'])) {
            $model->isInstanceRdsKey = $map['IsInstanceRdsKey'];
        }
        if (isset($map['IsPolarDBKey'])) {
            $model->isPolarDBKey = $map['IsPolarDBKey'];
        }
        if (isset($map['IsRdsKey'])) {
            $model->isRdsKey = $map['IsRdsKey'];
        }
        if (isset($map['distParameterDescription'])) {
            $model->distParameterDescription = $map['distParameterDescription'];
        }
        if (isset($map['distParameterName'])) {
            $model->distParameterName = $map['distParameterName'];
        }
        if (isset($map['distParameterOptional'])) {
            $model->distParameterOptional = $map['distParameterOptional'];
        }
        if (isset($map['distParameterValue'])) {
            $model->distParameterValue = $map['distParameterValue'];
        }
        if (isset($map['rdsParameterDescription'])) {
            $model->rdsParameterDescription = $map['rdsParameterDescription'];
        }
        if (isset($map['rdsParameterName'])) {
            $model->rdsParameterName = $map['rdsParameterName'];
        }
        if (isset($map['rdsParameterOptional'])) {
            $model->rdsParameterOptional = $map['rdsParameterOptional'];
        }
        if (isset($map['rdsParameterValue'])) {
            $model->rdsParameterValue = $map['rdsParameterValue'];
        }

        return $model;
    }
}
