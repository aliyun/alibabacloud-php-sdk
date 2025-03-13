<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserConnectTimeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $endConnectTime;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $oversoldGroupId;

    /**
     * @var string
     */
    public $startConnectTime;

    /**
     * @var string
     */
    public $userDesktopId;

    /**
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'endConnectTime'   => 'EndConnectTime',
        'endUserId'        => 'EndUserId',
        'oversoldGroupId'  => 'OversoldGroupId',
        'startConnectTime' => 'StartConnectTime',
        'userDesktopId'    => 'UserDesktopId',
        'userGroupId'      => 'UserGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endConnectTime) {
            $res['EndConnectTime'] = $this->endConnectTime;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->oversoldGroupId) {
            $res['OversoldGroupId'] = $this->oversoldGroupId;
        }
        if (null !== $this->startConnectTime) {
            $res['StartConnectTime'] = $this->startConnectTime;
        }
        if (null !== $this->userDesktopId) {
            $res['UserDesktopId'] = $this->userDesktopId;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
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
        if (isset($map['EndConnectTime'])) {
            $model->endConnectTime = $map['EndConnectTime'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['OversoldGroupId'])) {
            $model->oversoldGroupId = $map['OversoldGroupId'];
        }
        if (isset($map['StartConnectTime'])) {
            $model->startConnectTime = $map['StartConnectTime'];
        }
        if (isset($map['UserDesktopId'])) {
            $model->userDesktopId = $map['UserDesktopId'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}
