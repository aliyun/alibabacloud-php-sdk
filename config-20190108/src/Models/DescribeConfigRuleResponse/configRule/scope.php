<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleResponse\configRule;

use AlibabaCloud\Tea\Model;

class scope extends Model
{
    /**
     * @var string
     */
    public $complianceResourceId;

    /**
     * @var string[]
     */
    public $complianceResourceTypes;
    protected $_name = [
        'complianceResourceId'    => 'ComplianceResourceId',
        'complianceResourceTypes' => 'ComplianceResourceTypes',
    ];

    public function validate()
    {
        Model::validateRequired('complianceResourceId', $this->complianceResourceId, true);
        Model::validateRequired('complianceResourceTypes', $this->complianceResourceTypes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complianceResourceId) {
            $res['ComplianceResourceId'] = $this->complianceResourceId;
        }
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
        if (isset($map['ComplianceResourceId'])) {
            $model->complianceResourceId = $map['ComplianceResourceId'];
        }
        if (isset($map['ComplianceResourceTypes'])) {
            if (!empty($map['ComplianceResourceTypes'])) {
                $model->complianceResourceTypes = $map['ComplianceResourceTypes'];
            }
        }

        return $model;
    }
}
