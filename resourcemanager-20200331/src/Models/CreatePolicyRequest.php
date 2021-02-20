<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class CreatePolicyRequest extends Model
{
    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $policyDocument;
    protected $_name = [
        'policyName'     => 'PolicyName',
        'description'    => 'Description',
        'policyDocument' => 'PolicyDocument',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->policyDocument) {
            $res['PolicyDocument'] = $this->policyDocument;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PolicyDocument'])) {
            $model->policyDocument = $map['PolicyDocument'];
        }

        return $model;
    }
}
