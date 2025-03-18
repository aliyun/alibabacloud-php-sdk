<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody\resources;

use AlibabaCloud\Tea\Model;

class sessions extends Model
{
    /**
     * @example 2025-01-22T11:03:36Z
     *
     * @var string
     */
    public $resourceSessionStartTime;

    /**
     * @example user001
     *
     * @var string
     */
    public $userId;

    /**
     * @example benchmark_test@test.shenzhen
     *
     * @var string
     */
    public $userPrincipalName;
    protected $_name = [
        'resourceSessionStartTime' => 'ResourceSessionStartTime',
        'userId' => 'UserId',
        'userPrincipalName' => 'UserPrincipalName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceSessionStartTime) {
            $res['ResourceSessionStartTime'] = $this->resourceSessionStartTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sessions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceSessionStartTime'])) {
            $model->resourceSessionStartTime = $map['ResourceSessionStartTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }

        return $model;
    }
}
