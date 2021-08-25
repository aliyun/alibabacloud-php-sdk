<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleResponseBody\configRule;

use AlibabaCloud\Tea\Model;

class scope extends Model
{
    /**
     * @var string[]
     */
    public $complianceResourceTypes;

    /**
     * @var string
     */
    public $complianceResourceId;
    protected $_name = [
        'complianceResourceTypes' => 'ComplianceResourceTypes',
        'complianceResourceId'    => 'ComplianceResourceId',
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
        if (null !== $this->complianceResourceId) {
            $res['ComplianceResourceId'] = $this->complianceResourceId;
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
        if (isset($map['ComplianceResourceId'])) {
            $model->complianceResourceId = $map['ComplianceResourceId'];
        }

        return $model;
    }
}
