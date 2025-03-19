<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreatePolicyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Policy ID
     *
     * @example p-cq7l5s5lhtgi6qasr***
     *
     * @var string
     */
    public $policyId;
    protected $_name = [
        'policyId' => 'policyId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyId) {
            $res['policyId'] = $this->policyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['policyId'])) {
            $model->policyId = $map['policyId'];
        }

        return $model;
    }
}
