<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceIdentityRoleResponseBody extends Model
{
    /**
     * @example ServiceLinkedRoleAlreadyExistsErrorProblem
     *
     * @var string
     */
    public $code;

    /**
     * @example C03B2680-AC9C-59CD-93C5-8142B92537FA
     *
     * @var string
     */
    public $requestId;

    /**
     * @example AliyunServiceRoleForFeatureStore
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'code'      => 'Code',
        'requestId' => 'RequestId',
        'roleName'  => 'RoleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
     * @return CreateServiceIdentityRoleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
