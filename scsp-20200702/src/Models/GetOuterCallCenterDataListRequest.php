<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models;

use AlibabaCloud\Tea\Model;

class GetOuterCallCenterDataListRequest extends Model
{
    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $fromPhoneNum;

    /**
     * @var string
     */
    public $toPhoneNum;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $queryStartTime;

    /**
     * @var string
     */
    public $queryEndTime;
    protected $_name = [
        'sessionId'      => 'SessionId',
        'fromPhoneNum'   => 'FromPhoneNum',
        'toPhoneNum'     => 'ToPhoneNum',
        'bizId'          => 'BizId',
        'instanceId'     => 'InstanceId',
        'queryStartTime' => 'QueryStartTime',
        'queryEndTime'   => 'QueryEndTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->fromPhoneNum) {
            $res['FromPhoneNum'] = $this->fromPhoneNum;
        }
        if (null !== $this->toPhoneNum) {
            $res['ToPhoneNum'] = $this->toPhoneNum;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->queryStartTime) {
            $res['QueryStartTime'] = $this->queryStartTime;
        }
        if (null !== $this->queryEndTime) {
            $res['QueryEndTime'] = $this->queryEndTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOuterCallCenterDataListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['FromPhoneNum'])) {
            $model->fromPhoneNum = $map['FromPhoneNum'];
        }
        if (isset($map['ToPhoneNum'])) {
            $model->toPhoneNum = $map['ToPhoneNum'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['QueryStartTime'])) {
            $model->queryStartTime = $map['QueryStartTime'];
        }
        if (isset($map['QueryEndTime'])) {
            $model->queryEndTime = $map['QueryEndTime'];
        }

        return $model;
    }
}
