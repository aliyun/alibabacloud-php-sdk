<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSecurityConfigsResponseBody\instanceSecurityConfigs;

use AlibabaCloud\Dara\Model;

class securityConfigs extends Model
{
    /**
     * @var string
     */
    public $configDescription;

    /**
     * @var string
     */
    public $configGroup;

    /**
     * @var string
     */
    public $configName;

    /**
     * @var bool
     */
    public $risk;

    /**
     * @var string
     */
    public $riskDescription;
    protected $_name = [
        'configDescription' => 'ConfigDescription',
        'configGroup' => 'ConfigGroup',
        'configName' => 'ConfigName',
        'risk' => 'Risk',
        'riskDescription' => 'RiskDescription',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configDescription) {
            $res['ConfigDescription'] = $this->configDescription;
        }

        if (null !== $this->configGroup) {
            $res['ConfigGroup'] = $this->configGroup;
        }

        if (null !== $this->configName) {
            $res['ConfigName'] = $this->configName;
        }

        if (null !== $this->risk) {
            $res['Risk'] = $this->risk;
        }

        if (null !== $this->riskDescription) {
            $res['RiskDescription'] = $this->riskDescription;
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
        if (isset($map['ConfigDescription'])) {
            $model->configDescription = $map['ConfigDescription'];
        }

        if (isset($map['ConfigGroup'])) {
            $model->configGroup = $map['ConfigGroup'];
        }

        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }

        if (isset($map['Risk'])) {
            $model->risk = $map['Risk'];
        }

        if (isset($map['RiskDescription'])) {
            $model->riskDescription = $map['RiskDescription'];
        }

        return $model;
    }
}
