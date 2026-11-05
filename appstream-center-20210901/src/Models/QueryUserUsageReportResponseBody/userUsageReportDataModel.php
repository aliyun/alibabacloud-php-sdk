<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryUserUsageReportResponseBody;

use AlibabaCloud\Dara\Model;

class userUsageReportDataModel extends Model
{
    /**
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var string
     */
    public $appInstanceGroupName;

    /**
     * @var string
     */
    public $connectionStatus;

    /**
     * @var string
     */
    public $lastConnectedTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var float
     */
    public $sessionsHoldDuration;

    /**
     * @var float
     */
    public $usageDuration;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceGroupName' => 'AppInstanceGroupName',
        'connectionStatus' => 'ConnectionStatus',
        'lastConnectedTime' => 'LastConnectedTime',
        'regionId' => 'RegionId',
        'sessionsHoldDuration' => 'SessionsHoldDuration',
        'usageDuration' => 'UsageDuration',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }

        if (null !== $this->appInstanceGroupName) {
            $res['AppInstanceGroupName'] = $this->appInstanceGroupName;
        }

        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }

        if (null !== $this->lastConnectedTime) {
            $res['LastConnectedTime'] = $this->lastConnectedTime;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sessionsHoldDuration) {
            $res['SessionsHoldDuration'] = $this->sessionsHoldDuration;
        }

        if (null !== $this->usageDuration) {
            $res['UsageDuration'] = $this->usageDuration;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }

        if (isset($map['AppInstanceGroupName'])) {
            $model->appInstanceGroupName = $map['AppInstanceGroupName'];
        }

        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }

        if (isset($map['LastConnectedTime'])) {
            $model->lastConnectedTime = $map['LastConnectedTime'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SessionsHoldDuration'])) {
            $model->sessionsHoldDuration = $map['SessionsHoldDuration'];
        }

        if (isset($map['UsageDuration'])) {
            $model->usageDuration = $map['UsageDuration'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
