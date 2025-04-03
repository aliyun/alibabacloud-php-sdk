<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesResponseBody\compliancePackTemplatesResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesResponseBody\compliancePackTemplatesResult\compliancePackTemplates\configRules;

class compliancePackTemplates extends Model
{
    /**
     * @var string
     */
    public $compliancePackTemplateId;

    /**
     * @var string
     */
    public $compliancePackTemplateName;

    /**
     * @var configRules[]
     */
    public $configRules;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var int
     */
    public $lastUpdate;

    /**
     * @var int
     */
    public $riskLevel;
    protected $_name = [
        'compliancePackTemplateId' => 'CompliancePackTemplateId',
        'compliancePackTemplateName' => 'CompliancePackTemplateName',
        'configRules' => 'ConfigRules',
        'description' => 'Description',
        'labels' => 'Labels',
        'lastUpdate' => 'LastUpdate',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate()
    {
        if (\is_array($this->configRules)) {
            Model::validateArray($this->configRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compliancePackTemplateId) {
            $res['CompliancePackTemplateId'] = $this->compliancePackTemplateId;
        }

        if (null !== $this->compliancePackTemplateName) {
            $res['CompliancePackTemplateName'] = $this->compliancePackTemplateName;
        }

        if (null !== $this->configRules) {
            if (\is_array($this->configRules)) {
                $res['ConfigRules'] = [];
                $n1 = 0;
                foreach ($this->configRules as $item1) {
                    $res['ConfigRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }

        if (null !== $this->lastUpdate) {
            $res['LastUpdate'] = $this->lastUpdate;
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
        if (isset($map['CompliancePackTemplateId'])) {
            $model->compliancePackTemplateId = $map['CompliancePackTemplateId'];
        }

        if (isset($map['CompliancePackTemplateName'])) {
            $model->compliancePackTemplateName = $map['CompliancePackTemplateName'];
        }

        if (isset($map['ConfigRules'])) {
            if (!empty($map['ConfigRules'])) {
                $model->configRules = [];
                $n1 = 0;
                foreach ($map['ConfigRules'] as $item1) {
                    $model->configRules[$n1++] = configRules::fromMap($item1);
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }

        if (isset($map['LastUpdate'])) {
            $model->lastUpdate = $map['LastUpdate'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
