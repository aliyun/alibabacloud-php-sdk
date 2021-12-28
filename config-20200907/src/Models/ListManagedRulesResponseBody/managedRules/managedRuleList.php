<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListManagedRulesResponseBody\managedRules;

use AlibabaCloud\Tea\Model;

class managedRuleList extends Model
{
    /**
     * @var string
     */
    public $configRuleName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $helpUrls;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var int
     */
    public $riskLevel;
    protected $_name = [
        'configRuleName' => 'ConfigRuleName',
        'description'    => 'Description',
        'helpUrls'       => 'HelpUrls',
        'identifier'     => 'Identifier',
        'labels'         => 'Labels',
        'riskLevel'      => 'RiskLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configRuleName) {
            $res['ConfigRuleName'] = $this->configRuleName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->helpUrls) {
            $res['HelpUrls'] = $this->helpUrls;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return managedRuleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigRuleName'])) {
            $model->configRuleName = $map['ConfigRuleName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HelpUrls'])) {
            $model->helpUrls = $map['HelpUrls'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = $map['Labels'];
            }
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
