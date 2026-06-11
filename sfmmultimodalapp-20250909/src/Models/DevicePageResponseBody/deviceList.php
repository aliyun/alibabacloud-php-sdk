<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DevicePageResponseBody;

use AlibabaCloud\Dara\Model;

class deviceList extends Model
{
    /**
     * @var string
     */
    public $activeTime;

    /**
     * @var string
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $dailyCount;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var int
     */
    public $orderType;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $subAliyunUid;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $userActiveTime;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'activeTime' => 'ActiveTime',
        'aliyunUid' => 'AliyunUid',
        'appId' => 'AppId',
        'dailyCount' => 'DailyCount',
        'deviceName' => 'DeviceName',
        'orderType' => 'OrderType',
        'status' => 'Status',
        'subAliyunUid' => 'SubAliyunUid',
        'totalCount' => 'TotalCount',
        'userActiveTime' => 'UserActiveTime',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeTime) {
            $res['ActiveTime'] = $this->activeTime;
        }

        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->dailyCount) {
            $res['DailyCount'] = $this->dailyCount;
        }

        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subAliyunUid) {
            $res['SubAliyunUid'] = $this->subAliyunUid;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->userActiveTime) {
            $res['UserActiveTime'] = $this->userActiveTime;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['ActiveTime'])) {
            $model->activeTime = $map['ActiveTime'];
        }

        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['DailyCount'])) {
            $model->dailyCount = $map['DailyCount'];
        }

        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubAliyunUid'])) {
            $model->subAliyunUid = $map['SubAliyunUid'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['UserActiveTime'])) {
            $model->userActiveTime = $map['UserActiveTime'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
