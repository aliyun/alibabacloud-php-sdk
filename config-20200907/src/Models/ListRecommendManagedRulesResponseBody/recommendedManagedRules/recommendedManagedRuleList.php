<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListRecommendManagedRulesResponseBody\recommendedManagedRules;

use AlibabaCloud\Dara\Model;

class recommendedManagedRuleList extends Model
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
    public $identifier;

    /**
     * @var string
     */
    public $resourceTypeScope;
    protected $_name = [
        'configRuleName' => 'ConfigRuleName',
        'description' => 'Description',
        'identifier' => 'Identifier',
        'resourceTypeScope' => 'ResourceTypeScope',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configRuleName) {
            $res['ConfigRuleName'] = $this->configRuleName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }

        if (null !== $this->resourceTypeScope) {
            $res['ResourceTypeScope'] = $this->resourceTypeScope;
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
        if (isset($map['ConfigRuleName'])) {
            $model->configRuleName = $map['ConfigRuleName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }

        if (isset($map['ResourceTypeScope'])) {
            $model->resourceTypeScope = $map['ResourceTypeScope'];
        }

        return $model;
    }
}
