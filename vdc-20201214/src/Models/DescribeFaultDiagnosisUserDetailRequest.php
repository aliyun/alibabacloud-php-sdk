<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeFaultDiagnosisUserDetailRequest extends Model
{
    /**
     * @example 0rbd****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 311
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 1615892596
     *
     * @var int
     */
    public $createdTs;

    /**
     * @example JOIN_SLOW
     *
     * @var string
     */
    public $faultType;

    /**
     * @example true
     *
     * @var bool
     */
    public $queryCallUserInfo;

    /**
     * @example 0a497933****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId'             => 'AppId',
        'channelId'         => 'ChannelId',
        'createdTs'         => 'CreatedTs',
        'faultType'         => 'FaultType',
        'queryCallUserInfo' => 'QueryCallUserInfo',
        'userId'            => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->createdTs) {
            $res['CreatedTs'] = $this->createdTs;
        }
        if (null !== $this->faultType) {
            $res['FaultType'] = $this->faultType;
        }
        if (null !== $this->queryCallUserInfo) {
            $res['QueryCallUserInfo'] = $this->queryCallUserInfo;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFaultDiagnosisUserDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['CreatedTs'])) {
            $model->createdTs = $map['CreatedTs'];
        }
        if (isset($map['FaultType'])) {
            $model->faultType = $map['FaultType'];
        }
        if (isset($map['QueryCallUserInfo'])) {
            $model->queryCallUserInfo = $map['QueryCallUserInfo'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
