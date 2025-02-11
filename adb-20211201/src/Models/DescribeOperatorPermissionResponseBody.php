<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class DescribeOperatorPermissionResponseBody extends Model
{
    /**
     * @var string
     */
    public $createdTime;
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string
     */
    public $expiredTime;
    /**
     * @var string
     */
    public $privileges;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
