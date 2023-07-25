<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesResponseBody\compliancePackTemplatesResult;

use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesResponseBody\compliancePackTemplatesResult\compliancePackTemplates\configRules;
use AlibabaCloud\Tea\Model;

class compliancePackTemplates extends Model
{
    /**
     * @description The ID of the compliance package template.
     *
     * @example ct-d254ff4e06a300cf****
     *
     * @var string
     */
    public $compliancePackTemplateId;

    /**
     * @description The name of the compliance package template.
     *
     * @var string
     */
    public $compliancePackTemplateName;

    /**
     * @description An array that contains the managed rules in the compliance package.
     *
     * @var configRules[]
     */
    public $configRules;

    /**
     * @description The description of the compliance package.
     *
     * @var string
     */
    public $description;

    /**
     * @description The tag of the compliance package.
     *
     * @var string
     */
    public $labels;

    /**
     * @description The time when the compliance package was last updated.
     *
     * @example 1663408308
     *
     * @var int
     */
    public $lastUpdate;

    /**
     * @description The risk level of the resources that are not compliant with the managed rules in the compliance package. Valid values:
     *
     *   1: high
     *   2: medium
     *   3: low
     *
     * @example 1
     *
     * @var int
     */
    public $riskLevel;
    protected $_name = [
        'compliancePackTemplateId'   => 'CompliancePackTemplateId',
        'compliancePackTemplateName' => 'CompliancePackTemplateName',
        'configRules'                => 'ConfigRules',
        'description'                => 'Description',
        'labels'                     => 'Labels',
        'lastUpdate'                 => 'LastUpdate',
        'riskLevel'                  => 'RiskLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compliancePackTemplateId) {
            $res['CompliancePackTemplateId'] = $this->compliancePackTemplateId;
        }
        if (null !== $this->compliancePackTemplateName) {
            $res['CompliancePackTemplateName'] = $this->compliancePackTemplateName;
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

    /**
     * @param array $map
     *
     * @return compliancePackTemplates
     */
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
                $n                  = 0;
                foreach ($map['ConfigRules'] as $item) {
                    $model->configRules[$n++] = null !== $item ? configRules::fromMap($item) : $item;
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
