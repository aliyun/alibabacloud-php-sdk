<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBuildRiskByKeyResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $advice;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $layerCmd;
    /**
     * @var string
     */
    public $layerDigest;
    /**
     * @var string
     */
    public $promt;
    /**
     * @var string
     */
    public $riskClass;
    /**
     * @var string
     */
    public $riskClassName;
    /**
     * @var string
     */
    public $riskKey;
    /**
     * @var string
     */
    public $riskKeyName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
