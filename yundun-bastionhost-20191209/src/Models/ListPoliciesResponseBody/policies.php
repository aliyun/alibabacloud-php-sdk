<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListPoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @description The remarks of the control policy.
     *
     * @var string
     */
    public $comment;

    /**
     * @description The control policy ID.
     *
     * @example 2
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The name of the control policy.
     *
     * @example test
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The priority of the control policy. A smaller value indicates a higher priority.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;
    protected $_name = [
        'comment'    => 'Comment',
        'policyId'   => 'PolicyId',
        'policyName' => 'PolicyName',
        'priority'   => 'Priority',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        return $model;
    }
}
