<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeOperatorPermissionResponseBody extends Model
{
    /**
     * @var string
     */
    public $privileges;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $createdTime;
    protected $_name = [
        'privileges'  => 'Privileges',
        'DBClusterId' => 'DBClusterId',
        'requestId'   => 'RequestId',
        'expiredTime' => 'ExpiredTime',
        'createdTime' => 'CreatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privileges) {
            $res['Privileges'] = $this->privileges;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
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
        if (isset($map['Privileges'])) {
            $model->privileges = $map['Privileges'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        return $model;
    }
}
