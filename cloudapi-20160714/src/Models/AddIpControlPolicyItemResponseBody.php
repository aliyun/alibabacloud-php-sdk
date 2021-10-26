<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class AddIpControlPolicyItemResponseBody extends Model
{
    /**
     * @var string
     */
    public $policyItemId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'policyItemId' => 'PolicyItemId',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyItemId) {
            $res['PolicyItemId'] = $this->policyItemId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddIpControlPolicyItemResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyItemId'])) {
            $model->policyItemId = $map['PolicyItemId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
