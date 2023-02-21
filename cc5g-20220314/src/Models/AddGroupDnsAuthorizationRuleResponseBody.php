<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class AddGroupDnsAuthorizationRuleResponseBody extends Model
{
    /**
     * @example ar5gg-12fnojjtkkre28t08j
     *
     * @var string
     */
    public $authorizationRuleId;

    /**
     * @example D3BAFE75-C670-52DB-9739-03133E5FC914
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'authorizationRuleId' => 'AuthorizationRuleId',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationRuleId) {
            $res['AuthorizationRuleId'] = $this->authorizationRuleId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddGroupDnsAuthorizationRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationRuleId'])) {
            $model->authorizationRuleId = $map['AuthorizationRuleId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
