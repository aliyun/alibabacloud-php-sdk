<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBuildRiskByKeyResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example do not use root user
     *
     * @var string
     */
    public $advice;

    /**
     * @example the root user has excessive permissions
     *
     * @var string
     */
    public $description;

    /**
     * @example user root
     *
     * @var string
     */
    public $layerCmd;

    /**
     * @example 6ec898e6274f942e0e4a053eff1c3119026a6704e56cff206b2cec71f636****
     *
     * @var string
     */
    public $layerDigest;

    /**
     * @example the root user has excessive permissions
     *
     * @var string
     */
    public $promt;

    /**
     * @example other
     *
     * @var string
     */
    public $riskClass;

    /**
     * @example other
     *
     * @var string
     */
    public $riskClassName;

    /**
     * @example no_user
     *
     * @var string
     */
    public $riskKey;

    /**
     * @example no_user
     *
     * @var string
     */
    public $riskKeyName;

    /**
     * @example medium
     *
     * @var string
     */
    public $riskLevel;
    protected $_name = [
        'advice'        => 'Advice',
        'description'   => 'Description',
        'layerCmd'      => 'LayerCmd',
        'layerDigest'   => 'LayerDigest',
        'promt'         => 'Promt',
        'riskClass'     => 'RiskClass',
        'riskClassName' => 'RiskClassName',
        'riskKey'       => 'RiskKey',
        'riskKeyName'   => 'RiskKeyName',
        'riskLevel'     => 'RiskLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advice) {
            $res['Advice'] = $this->advice;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->layerCmd) {
            $res['LayerCmd'] = $this->layerCmd;
        }
        if (null !== $this->layerDigest) {
            $res['LayerDigest'] = $this->layerDigest;
        }
        if (null !== $this->promt) {
            $res['Promt'] = $this->promt;
        }
        if (null !== $this->riskClass) {
            $res['RiskClass'] = $this->riskClass;
        }
        if (null !== $this->riskClassName) {
            $res['RiskClassName'] = $this->riskClassName;
        }
        if (null !== $this->riskKey) {
            $res['RiskKey'] = $this->riskKey;
        }
        if (null !== $this->riskKeyName) {
            $res['RiskKeyName'] = $this->riskKeyName;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Advice'])) {
            $model->advice = $map['Advice'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LayerCmd'])) {
            $model->layerCmd = $map['LayerCmd'];
        }
        if (isset($map['LayerDigest'])) {
            $model->layerDigest = $map['LayerDigest'];
        }
        if (isset($map['Promt'])) {
            $model->promt = $map['Promt'];
        }
        if (isset($map['RiskClass'])) {
            $model->riskClass = $map['RiskClass'];
        }
        if (isset($map['RiskClassName'])) {
            $model->riskClassName = $map['RiskClassName'];
        }
        if (isset($map['RiskKey'])) {
            $model->riskKey = $map['RiskKey'];
        }
        if (isset($map['RiskKeyName'])) {
            $model->riskKeyName = $map['RiskKeyName'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
