<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeUserVpcAuthorizationsResponseBody;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @description The authorization scope. Valid value:
     *
     *   NORMAL: general authorization.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $authType;

    /**
     * @description The name of the Alibaba Cloud account.
     *
     * @example alidns***@test.com
     *
     * @var string
     */
    public $authorizedAliyunId;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 111222333
     *
     * @var int
     */
    public $authorizedUserId;

    /**
     * @description The time when the authorization was performed. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-05-08T02:31Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the authorization was performed. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1672740294000
     *
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
