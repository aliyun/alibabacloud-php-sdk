<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListILMPoliciesRequest extends Model
{
    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $policyName;
    protected $_name = [
        'body'       => 'body',
        'policyName' => 'policyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
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
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['policyName'])) {
            $model->policyName = $map['policyName'];
        }

        return $model;
    }
}
