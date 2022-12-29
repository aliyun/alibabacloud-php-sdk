<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class CheckCloudResourceAuthorizedResponseBody extends Model
{
    /**
     * @description Indicates whether KMS keys are authorized to ApsaraDB for MongoDB instances. Valid values:
     *
     *   **0**: KMS keys are not authorized.
     *   **1**: KMS keys are authorized.
     *   **2**: KMS is not enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $authorizationState;

    /**
     * @description The ID of the request.
     *
     * @example A0181AC4-F186-46ED-87CA-100C70B86729
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The role information of the authorized Alibaba Resource Name (ARN).
     *
     * >  This parameter is returned only when the value of the **AuthorizationState** parameter is **1**.
     * @example acs:ram::140****:role/aliyunrdsinstanceencryptiondefaultrole
     *
     * @var string
     */
    public $roleArn;
    protected $_name = [
        'authorizationState' => 'AuthorizationState',
        'requestId'          => 'RequestId',
        'roleArn'            => 'RoleArn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationState) {
            $res['AuthorizationState'] = $this->authorizationState;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckCloudResourceAuthorizedResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationState'])) {
            $model->authorizationState = $map['AuthorizationState'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }

        return $model;
    }
}
