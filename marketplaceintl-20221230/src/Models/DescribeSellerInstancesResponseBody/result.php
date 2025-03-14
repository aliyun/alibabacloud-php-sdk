<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MarketplaceIntl\V20221230\Models\DescribeSellerInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example {\\"authUrl\\":\\"https://marketplace.alibabacloud.com/\\"}
     *
     * @var string
     */
    public $appInfo;

    /**
     * @example 1
     *
     * @var int
     */
    public $chargeType;

    /**
     * @example sgcmgj000356
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example 1741752000000
     *
     * @var int
     */
    public $createdOn;

    /**
     * @example {\\"userName\\":\\"marketplace\\"}
     *
     * @var string
     */
    public $hostInfo;

    /**
     * @example {\\"userName\\":\\"marketplace\\"}
     *
     * @var string
     */
    public $info;

    /**
     * @example 5000002763123
     *
     * @var int
     */
    public $instanceId;

    /**
     * @example OPENED
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @example 5322460655123456
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return result
     */
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
