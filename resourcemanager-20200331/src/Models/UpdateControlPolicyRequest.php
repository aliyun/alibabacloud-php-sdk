<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;

class UpdateControlPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $newDescription;
    /**
     * @var string
     */
    public $newPolicyDocument;
    /**
     * @var string
     */
    public $newPolicyName;
    /**
     * @var string
     */
    public $policyId;
    protected $_name = [
        'newDescription'    => 'NewDescription',
        'newPolicyDocument' => 'NewPolicyDocument',
        'newPolicyName'     => 'NewPolicyName',
        'policyId'          => 'PolicyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newDescription) {
            $res['NewDescription'] = $this->newDescription;
        }

        if (null !== $this->newPolicyDocument) {
            $res['NewPolicyDocument'] = $this->newPolicyDocument;
        }

        if (null !== $this->newPolicyName) {
            $res['NewPolicyName'] = $this->newPolicyName;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
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
        if (isset($map['NewDescription'])) {
            $model->newDescription = $map['NewDescription'];
        }

        if (isset($map['NewPolicyDocument'])) {
            $model->newPolicyDocument = $map['NewPolicyDocument'];
        }

        if (isset($map['NewPolicyName'])) {
            $model->newPolicyName = $map['NewPolicyName'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        return $model;
    }
}
