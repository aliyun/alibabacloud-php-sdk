<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class GetServiceIdentityRoleResponseBody extends Model
{
    /**
     * @example {
     * }
     * @var string
     */
    public $policy;

    /**
     * @example 6F629E92-F64D-502D-85AA-A9C54894CA3D
     *
     * @var string
     */
    public $requestId;

    /**
     * @example AliyunServiceRoleForPaiFeatureStore
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'policy'    => 'Policy',
        'requestId' => 'RequestId',
        'roleName'  => 'RoleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceIdentityRoleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
