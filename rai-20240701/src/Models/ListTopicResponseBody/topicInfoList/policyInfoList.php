<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\ListTopicResponseBody\topicInfoList;

use AlibabaCloud\Dara\Model;

class policyInfoList extends Model
{
    /**
     * @var int
     */
    public $policyId;

    /**
     * @var string
     */
    public $policyIdentifier;

    /**
     * @var string
     */
    public $policyName;
    protected $_name = [
        'policyId' => 'PolicyId',
        'policyIdentifier' => 'PolicyIdentifier',
        'policyName' => 'PolicyName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->policyIdentifier) {
            $res['PolicyIdentifier'] = $this->policyIdentifier;
        }

        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
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
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['PolicyIdentifier'])) {
            $model->policyIdentifier = $map['PolicyIdentifier'];
        }

        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        return $model;
    }
}
