<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListPoliciesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\Definition;

class policies extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var Definition
     */
    public $definition;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $policyArn;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $policySetName;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'definition' => 'Definition',
        'description' => 'Description',
        'policyArn' => 'PolicyArn',
        'policyName' => 'PolicyName',
        'policySetName' => 'PolicySetName',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->definition) {
            $this->definition->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->definition) {
            $res['Definition'] = null !== $this->definition ? $this->definition->toArray($noStream) : $this->definition;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->policyArn) {
            $res['PolicyArn'] = $this->policyArn;
        }

        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        if (null !== $this->policySetName) {
            $res['PolicySetName'] = $this->policySetName;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Definition'])) {
            $model->definition = Definition::fromMap($map['Definition']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['PolicyArn'])) {
            $model->policyArn = $map['PolicyArn'];
        }

        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        if (isset($map['PolicySetName'])) {
            $model->policySetName = $map['PolicySetName'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
