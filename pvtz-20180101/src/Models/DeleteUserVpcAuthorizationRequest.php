<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class DeleteUserVpcAuthorizationRequest extends Model
{
    /**
     * @description The authorization scope. Valid values:
     *
     *   NORMAL: general authorization
     *   NORMAL: cloud service-related authorization
     *
     * @example NORMAL
     *
     * @var string
     */
    public $authType;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * This parameter is required.
     * @example 11111111
     *
     * @var int
     */
    public $authorizedUserId;
    protected $_name = [
        'authType'         => 'AuthType',
        'authorizedUserId' => 'AuthorizedUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->authorizedUserId) {
            $res['AuthorizedUserId'] = $this->authorizedUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUserVpcAuthorizationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['AuthorizedUserId'])) {
            $model->authorizedUserId = $map['AuthorizedUserId'];
        }

        return $model;
    }
}
