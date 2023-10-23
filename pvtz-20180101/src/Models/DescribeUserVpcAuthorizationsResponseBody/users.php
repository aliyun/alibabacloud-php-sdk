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

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $createTimestamp;
    protected $_name = [
        'authType'           => 'AuthType',
        'authorizedAliyunId' => 'AuthorizedAliyunId',
        'authorizedUserId'   => 'AuthorizedUserId',
        'createTime'         => 'CreateTime',
        'createTimestamp'    => 'CreateTimestamp',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        return $model;
    }
}
