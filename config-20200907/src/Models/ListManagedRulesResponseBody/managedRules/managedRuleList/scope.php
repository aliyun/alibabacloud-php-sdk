<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListManagedRulesResponseBody\managedRules\managedRuleList;

use AlibabaCloud\Tea\Model;

class scope extends Model
{
    /**
     * @description The types of resources to which the managed rule applies.
     *
     * @var string[]
     */
    public $complianceResourceTypes;
    protected $_name = [
        'complianceResourceTypes' => 'ComplianceResourceTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complianceResourceTypes) {
            $res['ComplianceResourceTypes'] = $this->complianceResourceTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scope
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComplianceResourceTypes'])) {
            if (!empty($map['ComplianceResourceTypes'])) {
                $model->complianceResourceTypes = $map['ComplianceResourceTypes'];
            }
        }

        return $model;
    }
}
