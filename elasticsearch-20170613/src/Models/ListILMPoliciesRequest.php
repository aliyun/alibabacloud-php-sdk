<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListILMPoliciesRequest extends Model
{
    /**
     * @example policy-1
     *
     * @var string
     */
    public $policyName;
    protected $_name = [
        'policyName' => 'policyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyName) {
            $res['policyName'] = $this->policyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListILMPoliciesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['policyName'])) {
            $model->policyName = $map['policyName'];
        }

        return $model;
    }
}
