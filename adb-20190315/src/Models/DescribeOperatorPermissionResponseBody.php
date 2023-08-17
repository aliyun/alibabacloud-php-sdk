<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeOperatorPermissionResponseBody extends Model
{
    /**
     * @description The time when the authorization takes effect.
     *
     * @example 2019-05-20T05:41:19Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The ID of the cluster.
     *
     * @example rm-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The time when the authorization expires.
     *
     * @example 2019-05-20T07:41:19Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The type of authorization. Valid values: Control | Data.
     *
     * @example Control,Data
     *
     * @var string
     */
    public $privileges;

    /**
     * @description The ID of the request.
     *
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'DBClusterId' => 'DBClusterId',
        'expiredTime' => 'ExpiredTime',
        'privileges'  => 'Privileges',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->privileges) {
            $res['Privileges'] = $this->privileges;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOperatorPermissionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['Privileges'])) {
            $model->privileges = $map['Privileges'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
