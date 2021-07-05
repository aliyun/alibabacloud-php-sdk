<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CheckCloudResourceAuthorizedResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var int
     */
    public $authorizationState;
    protected $_name = [
        'requestId'          => 'RequestId',
        'roleArn'            => 'RoleArn',
        'authorizationState' => 'AuthorizationState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->authorizationState) {
            $res['AuthorizationState'] = $this->authorizationState;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['AuthorizationState'])) {
            $model->authorizationState = $map['AuthorizationState'];
        }

        return $model;
    }
}
