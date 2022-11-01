<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponseBody;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponseBody\appInstanceGroupModels\apps;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponseBody\appInstanceGroupModels\nodePool;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponseBody\appInstanceGroupModels\otaInfo;
use AlibabaCloud\Tea\Model;

class appInstanceGroupModels extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $appCenterImageId;

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
    public $appInstanceType;

    /**
     * @var apps[]
     */
    public $apps;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var nodePool[]
     */
    public $nodePool;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var otaInfo
     */
    public $otaInfo;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sessionTimeout;

    /**
     * @var string
     */
    public $specId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'amount'               => 'Amount',
        'appCenterImageId'     => 'AppCenterImageId',
        'appInstanceGroupId'   => 'AppInstanceGroupId',
        'appInstanceGroupName' => 'AppInstanceGroupName',
        'appInstanceType'      => 'AppInstanceType',
        'apps'                 => 'Apps',
        'chargeType'           => 'ChargeType',
        'expiredTime'          => 'ExpiredTime',
        'gmtCreate'            => 'GmtCreate',
        'nodePool'             => 'NodePool',
        'osType'               => 'OsType',
        'otaInfo'              => 'OtaInfo',
        'productType'          => 'ProductType',
        'regionId'             => 'RegionId',
        'sessionTimeout'       => 'SessionTimeout',
        'specId'               => 'SpecId',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->appCenterImageId) {
            $res['AppCenterImageId'] = $this->appCenterImageId;
        }
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->appInstanceGroupName) {
            $res['AppInstanceGroupName'] = $this->appInstanceGroupName;
        }
        if (null !== $this->appInstanceType) {
            $res['AppInstanceType'] = $this->appInstanceType;
        }
        if (null !== $this->apps) {
            $res['Apps'] = [];
            if (null !== $this->apps && \is_array($this->apps)) {
                $n = 0;
                foreach ($this->apps as $item) {
                    $res['Apps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->nodePool) {
            $res['NodePool'] = [];
            if (null !== $this->nodePool && \is_array($this->nodePool)) {
                $n = 0;
                foreach ($this->nodePool as $item) {
                    $res['NodePool'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->otaInfo) {
            $res['OtaInfo'] = null !== $this->otaInfo ? $this->otaInfo->toMap() : null;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sessionTimeout) {
            $res['SessionTimeout'] = $this->sessionTimeout;
        }
        if (null !== $this->specId) {
            $res['SpecId'] = $this->specId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appInstanceGroupModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['AppCenterImageId'])) {
            $model->appCenterImageId = $map['AppCenterImageId'];
        }
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['AppInstanceGroupName'])) {
            $model->appInstanceGroupName = $map['AppInstanceGroupName'];
        }
        if (isset($map['AppInstanceType'])) {
            $model->appInstanceType = $map['AppInstanceType'];
        }
        if (isset($map['Apps'])) {
            if (!empty($map['Apps'])) {
                $model->apps = [];
                $n           = 0;
                foreach ($map['Apps'] as $item) {
                    $model->apps[$n++] = null !== $item ? apps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['NodePool'])) {
            if (!empty($map['NodePool'])) {
                $model->nodePool = [];
                $n               = 0;
                foreach ($map['NodePool'] as $item) {
                    $model->nodePool[$n++] = null !== $item ? nodePool::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['OtaInfo'])) {
            $model->otaInfo = otaInfo::fromMap($map['OtaInfo']);
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SessionTimeout'])) {
            $model->sessionTimeout = $map['SessionTimeout'];
        }
        if (isset($map['SpecId'])) {
            $model->specId = $map['SpecId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
