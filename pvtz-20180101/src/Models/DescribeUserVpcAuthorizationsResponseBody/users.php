<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeUserVpcAuthorizationsResponseBody;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @example NORMAL
     *
     * @var string
     */
    public $authType;

    /**
     * @example alidns***@test.com
     *
     * @var string
     */
    public $authorizedAliyunId;

    /**
     * @example 111222333
     *
     * @var int
     */
    public $authorizedUserId;
    protected $_name = [
        'authType'           => 'AuthType',
        'authorizedAliyunId' => 'AuthorizedAliyunId',
        'authorizedUserId'   => 'AuthorizedUserId',
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
        if (null !== $this->authorizedAliyunId) {
            $res['AuthorizedAliyunId'] = $this->authorizedAliyunId;
        }
        if (null !== $this->authorizedUserId) {
            $res['AuthorizedUserId'] = $this->authorizedUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return users
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['AuthorizedAliyunId'])) {
            $model->authorizedAliyunId = $map['AuthorizedAliyunId'];
        }
        if (isset($map['AuthorizedUserId'])) {
            $model->authorizedUserId = $map['AuthorizedUserId'];
        }

        return $model;
    }
}
