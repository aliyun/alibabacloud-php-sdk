<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CreateInstanceResponseBody\instance\admin;

use AlibabaCloud\SDK\CCC\V20170705\Models\CreateInstanceResponseBody\instance\admin\user\detail;
use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ramId;

    /**
     * @var detail
     */
    public $detail;
    protected $_name = [
        'userId'     => 'UserId',
        'instanceId' => 'InstanceId',
        'ramId'      => 'RamId',
        'detail'     => 'Detail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ramId) {
            $res['RamId'] = $this->ramId;
        }
        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RamId'])) {
            $model->ramId = $map['RamId'];
        }
        if (isset($map['Detail'])) {
            $model->detail = detail::fromMap($map['Detail']);
        }

        return $model;
    }
}
