<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreatePolicySetResponseBody;

use AlibabaCloud\Dara\Model;

class policySet extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $policySetArn;

    /**
     * @var string
     */
    public $policySetName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'policySetArn' => 'PolicySetArn',
        'policySetName' => 'PolicySetName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->policySetArn) {
            $res['PolicySetArn'] = $this->policySetArn;
        }

        if (null !== $this->policySetName) {
            $res['PolicySetName'] = $this->policySetName;
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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['PolicySetArn'])) {
            $model->policySetArn = $map['PolicySetArn'];
        }

        if (isset($map['PolicySetName'])) {
            $model->policySetName = $map['PolicySetName'];
        }

        return $model;
    }
}
