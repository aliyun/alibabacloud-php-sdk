<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesResponseBody\compliancePackTemplatesResult;

use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesResponseBody\compliancePackTemplatesResult\compliancePackTemplates\configRules;
use AlibabaCloud\Tea\Model;

class compliancePackTemplates extends Model
{
    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $description;

    /**
     * @var configRules[]
     */
    public $configRules;

    /**
     * @var string
     */
    public $compliancePackTemplateName;

    /**
     * @var string
     */
    public $compliancePackTemplateId;
    protected $_name = [
        'riskLevel'                  => 'RiskLevel',
        'description'                => 'Description',
        'configRules'                => 'ConfigRules',
        'compliancePackTemplateName' => 'CompliancePackTemplateName',
        'compliancePackTemplateId'   => 'CompliancePackTemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->configRules) {
            $res['ConfigRules'] = [];
            if (null !== $this->configRules && \is_array($this->configRules)) {
                $n = 0;
                foreach ($this->configRules as $item) {
                    $res['ConfigRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->compliancePackTemplateName) {
            $res['CompliancePackTemplateName'] = $this->compliancePackTemplateName;
        }
        if (null !== $this->compliancePackTemplateId) {
            $res['CompliancePackTemplateId'] = $this->compliancePackTemplateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return compliancePackTemplates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ConfigRules'])) {
            if (!empty($map['ConfigRules'])) {
                $model->configRules = [];
                $n                  = 0;
                foreach ($map['ConfigRules'] as $item) {
                    $model->configRules[$n++] = null !== $item ? configRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CompliancePackTemplateName'])) {
            $model->compliancePackTemplateName = $map['CompliancePackTemplateName'];
        }
        if (isset($map['CompliancePackTemplateId'])) {
            $model->compliancePackTemplateId = $map['CompliancePackTemplateId'];
        }

        return $model;
    }
}
