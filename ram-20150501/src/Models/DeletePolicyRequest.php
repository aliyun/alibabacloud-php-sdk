<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class DeletePolicyRequest extends Model
{
    /**
     * @var bool
     */
    public $cascadingDelete;

    /**
     * @description The name of the policy.
     *
     * @example OSS-Administrator
     *
     * @var string
     */
    public $policyName;
    protected $_name = [
        'cascadingDelete' => 'CascadingDelete',
        'policyName'      => 'PolicyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cascadingDelete) {
            $res['CascadingDelete'] = $this->cascadingDelete;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CascadingDelete'])) {
            $model->cascadingDelete = $map['CascadingDelete'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        return $model;
    }
}
