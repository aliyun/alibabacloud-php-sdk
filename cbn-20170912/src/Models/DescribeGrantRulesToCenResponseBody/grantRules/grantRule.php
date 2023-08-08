<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeGrantRulesToCenResponseBody\grantRules;

use AlibabaCloud\Tea\Model;

class grantRule extends Model
{
    /**
     * @description The CEN instance ID.
     *
     * @example cen-nye53d7p3hzyu4****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The ID of the Alibaba Cloud account to which the CEN instance belongs.
     *
     * @example 1210123456123456
     *
     * @var int
     */
    public $cenOwnerId;

    /**
     * @description The network instance ID.
     *
     * @example vpc-bp1rgeww9mdstuuar****
     *
     * @var string
     */
    public $childInstanceId;

    /**
     * @description The ID of the Alibaba Cloud account to which the network instance belongs.
     *
     * @example 1250123456123456
     *
     * @var int
     */
    public $childInstanceOwnerId;

    /**
     * @description The region ID of the network instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $childInstanceRegionId;

    /**
     * @description The type of the network instance. Valid values:
     *
     *   **VPC**
     *   **VBR**
     *   **CCN**
     *   **VPN**
     *
     * @example VPC
     *
     * @var string
     */
    public $childInstanceType;

    /**
     * @description The entity that pays the fees of the network instance. Valid values:
     *
     *   **PayByCenOwner**: the Alibaba Cloud account that owns the CEN instance.
     *   **PayByResourceOwner**: the Alibaba Cloud account that owns the network instance.
     *
     * @example PayByCenOwner
     *
     * @var string
     */
    public $orderType;
    protected $_name = [
        'cenId'                 => 'CenId',
        'cenOwnerId'            => 'CenOwnerId',
        'childInstanceId'       => 'ChildInstanceId',
        'childInstanceOwnerId'  => 'ChildInstanceOwnerId',
        'childInstanceRegionId' => 'ChildInstanceRegionId',
        'childInstanceType'     => 'ChildInstanceType',
        'orderType'             => 'OrderType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->cenOwnerId) {
            $res['CenOwnerId'] = $this->cenOwnerId;
        }
        if (null !== $this->childInstanceId) {
            $res['ChildInstanceId'] = $this->childInstanceId;
        }
        if (null !== $this->childInstanceOwnerId) {
            $res['ChildInstanceOwnerId'] = $this->childInstanceOwnerId;
        }
        if (null !== $this->childInstanceRegionId) {
            $res['ChildInstanceRegionId'] = $this->childInstanceRegionId;
        }
        if (null !== $this->childInstanceType) {
            $res['ChildInstanceType'] = $this->childInstanceType;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return grantRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CenOwnerId'])) {
            $model->cenOwnerId = $map['CenOwnerId'];
        }
        if (isset($map['ChildInstanceId'])) {
            $model->childInstanceId = $map['ChildInstanceId'];
        }
        if (isset($map['ChildInstanceOwnerId'])) {
            $model->childInstanceOwnerId = $map['ChildInstanceOwnerId'];
        }
        if (isset($map['ChildInstanceRegionId'])) {
            $model->childInstanceRegionId = $map['ChildInstanceRegionId'];
        }
        if (isset($map['ChildInstanceType'])) {
            $model->childInstanceType = $map['ChildInstanceType'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        return $model;
    }
}
