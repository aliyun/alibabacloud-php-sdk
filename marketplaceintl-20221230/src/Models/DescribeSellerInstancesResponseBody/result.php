<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MarketplaceIntl\V20221230\Models\DescribeSellerInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $appInfo;

    /**
     * @var int
     */
    public $chargeType;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var int
     */
    public $createdOn;

    /**
     * @var string
     */
    public $hostInfo;

    /**
     * @var string
     */
    public $info;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'appInfo' => 'AppInfo',
        'chargeType' => 'ChargeType',
        'commodityCode' => 'CommodityCode',
        'createdOn' => 'CreatedOn',
        'hostInfo' => 'HostInfo',
        'info' => 'Info',
        'instanceId' => 'InstanceId',
        'instanceStatus' => 'InstanceStatus',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInfo) {
            $res['AppInfo'] = $this->appInfo;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->createdOn) {
            $res['CreatedOn'] = $this->createdOn;
        }

        if (null !== $this->hostInfo) {
            $res['HostInfo'] = $this->hostInfo;
        }

        if (null !== $this->info) {
            $res['Info'] = $this->info;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
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
        if (isset($map['AppInfo'])) {
            $model->appInfo = $map['AppInfo'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['CreatedOn'])) {
            $model->createdOn = $map['CreatedOn'];
        }

        if (isset($map['HostInfo'])) {
            $model->hostInfo = $map['HostInfo'];
        }

        if (isset($map['Info'])) {
            $model->info = $map['Info'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
