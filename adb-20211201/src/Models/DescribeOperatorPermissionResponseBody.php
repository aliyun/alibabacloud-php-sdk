<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribeOperatorPermissionResponseBody extends Model
{
    /**
     * @example 2024-02-25T03:35:02Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example amv-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example 2024-01-10T02:19:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @example Control,Data
     *
     * @var string
     */
    public $privileges;

    /**
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
