<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSceneDefensePoliciesResponseBody\policies;

use AlibabaCloud\Tea\Model;

class runtimePolicies extends Model
{
    /**
     * @var string
     */
    public $newValue;

    /**
     * @var int
     */
    public $policyType;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $oldValue;
    protected $_name = [
        'newValue'   => 'NewValue',
        'policyType' => 'PolicyType',
        'status'     => 'Status',
        'oldValue'   => 'oldValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newValue) {
            $res['NewValue'] = $this->newValue;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->oldValue) {
            $res['oldValue'] = $this->oldValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runtimePolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewValue'])) {
            $model->newValue = $map['NewValue'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['oldValue'])) {
            $model->oldValue = $map['oldValue'];
        }

        return $model;
    }
}
