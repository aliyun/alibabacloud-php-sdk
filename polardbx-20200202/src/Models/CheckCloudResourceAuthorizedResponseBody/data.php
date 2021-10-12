<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\CheckCloudResourceAuthorizedResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $authorizationState;

    /**
     * @var string
     */
    public $roleArn;
    protected $_name = [
        'authorizationState' => 'AuthorizationState',
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
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
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
        if (isset($map['AuthorizationState'])) {
            $model->authorizationState = $map['AuthorizationState'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }

        return $model;
    }
}
