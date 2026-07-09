<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\ListPolicyGroupsResponseBody\policyGroupModel;

use AlibabaCloud\Dara\Model;

class accessPolicies extends Model
{
    /**
     * @var int
     */
    public $accessPolicyRuleId;

    /**
     * @var string
     */
    public $cidrIp;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var int
     */
    public $priority;
    protected $_name = [
        'accessPolicyRuleId' => 'AccessPolicyRuleId',
        'cidrIp' => 'CidrIp',
        'description' => 'Description',
        'policy' => 'Policy',
        'priority' => 'Priority',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessPolicyRuleId) {
            $res['AccessPolicyRuleId'] = $this->accessPolicyRuleId;
        }

        if (null !== $this->cidrIp) {
            $res['CidrIp'] = $this->cidrIp;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
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
        if (isset($map['AccessPolicyRuleId'])) {
            $model->accessPolicyRuleId = $map['AccessPolicyRuleId'];
        }

        if (isset($map['CidrIp'])) {
            $model->cidrIp = $map['CidrIp'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        return $model;
    }
}
