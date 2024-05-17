<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class CheckKMSAuthorizedResponseBody extends Model
{
    /**
     * @description Indicates whether the cluster is authorized to use KMS. Valid values:
     *
     *   **0**: no.
     *   **1**: yes.
     *
     * @example 0
     *
     * @var int
     */
    public $authorizationState;

    /**
     * @description The cluster ID.
     *
     * @example pc-************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The request ID.
     *
     * @example A7E6A8FD-C50B-46B2-BA85-D8B8D3******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the RAM role. A RAM role is a virtual identity that you can create within your Alibaba Cloud account. For more information, see [RAM role overview](https://help.aliyun.com/document_detail/93689.html).
     *
     * @example acs:ram::1406926*****:role/aliyunrdsinstanceencryptiondefaultrole
     *
     * @var string
     */
    public $roleArn;
    protected $_name = [
        'authorizationState' => 'AuthorizationState',
        'DBClusterId'        => 'DBClusterId',
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
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
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
     * @return CheckKMSAuthorizedResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationState'])) {
            $model->authorizationState = $map['AuthorizationState'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
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
