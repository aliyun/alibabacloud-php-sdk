<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetManagedRuleResponseBody\managedRule;

use AlibabaCloud\Dara\Model;

class scope extends Model
{
    /**
     * @var string[]
     */
    public $complianceResourceTypes;
    protected $_name = [
        'complianceResourceTypes' => 'ComplianceResourceTypes',
    ];

    public function validate()
    {
        if (\is_array($this->complianceResourceTypes)) {
            Model::validateArray($this->complianceResourceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->complianceResourceTypes) {
            if (\is_array($this->complianceResourceTypes)) {
                $res['ComplianceResourceTypes'] = [];
                $n1                             = 0;
                foreach ($this->complianceResourceTypes as $item1) {
                    $res['ComplianceResourceTypes'][$n1++] = $item1;
                }
            }
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
        if (isset($map['ComplianceResourceTypes'])) {
            if (!empty($map['ComplianceResourceTypes'])) {
                $model->complianceResourceTypes = [];
                $n1                             = 0;
                foreach ($map['ComplianceResourceTypes'] as $item1) {
                    $model->complianceResourceTypes[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
