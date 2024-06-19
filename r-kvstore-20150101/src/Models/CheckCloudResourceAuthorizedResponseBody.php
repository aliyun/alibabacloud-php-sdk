<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class CheckCloudResourceAuthorizedResponseBody extends Model
{
    /**
     * @description Indicates whether the instance is authorized to use KMS. Valid values:
     *
     *   **0**: The instance is authorized to use KMS.
     *   **1**: The instance is not authorized to use KMS.
     *   **2**: KMS is not activated. For more information, see [Activate KMS](https://help.aliyun.com/document_detail/153781.html).
     *
     * @example 1
     *
     * @var int
     */
    public $authorizationState;

    /**
     * @description The ID of the request.
     *
     * @example A501A191-BD70-5E50-98A9-C2A486A82****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'authorizationState' => 'AuthorizationState',
        'requestId'          => 'RequestId',
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

        return $model;
    }
}
