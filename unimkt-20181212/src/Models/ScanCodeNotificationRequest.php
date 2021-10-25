<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class ScanCodeNotificationRequest extends Model
{
    /**
     * @var int
     */
    public $age;

    /**
     * @var int
     */
    public $applyPrice;

    /**
     * @var string
     */
    public $bizResult;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $brandNick;

    /**
     * @var string
     */
    public $brandUserId;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $cid;

    /**
     * @var string
     */
    public $commodityId;

    /**
     * @var string
     */
    public $deviceCode;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $holderId;

    /**
     * @var string
     */
    public $outerCode;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var string
     */
    public $proxyUserId;

    /**
     * @var string
     */
    public $queryStr;

    /**
     * @var int
     */
    public $salePrice;

    /**
     * @var string
     */
    public $sex;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $v;

    /**
     * @var string
     */
    public $alipayOpenId;

    /**
     * @var string
     */
    public $chargeTag;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $realCostAmount;

    /**
     * @var string
     */
    public $costDetail;
    protected $_name = [
        'age'            => 'Age',
        'applyPrice'     => 'ApplyPrice',
        'bizResult'      => 'BizResult',
        'bizType'        => 'BizType',
        'brandNick'      => 'BrandNick',
        'brandUserId'    => 'BrandUserId',
        'channelId'      => 'ChannelId',
        'cid'            => 'Cid',
        'commodityId'    => 'CommodityId',
        'deviceCode'     => 'DeviceCode',
        'deviceType'     => 'DeviceType',
        'holderId'       => 'HolderId',
        'outerCode'      => 'OuterCode',
        'phase'          => 'Phase',
        'proxyUserId'    => 'ProxyUserId',
        'queryStr'       => 'QueryStr',
        'salePrice'      => 'SalePrice',
        'sex'            => 'Sex',
        'taskId'         => 'TaskId',
        'v'              => 'V',
        'alipayOpenId'   => 'AlipayOpenId',
        'chargeTag'      => 'ChargeTag',
        'taskType'       => 'TaskType',
        'realCostAmount' => 'RealCostAmount',
        'costDetail'     => 'CostDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->applyPrice) {
            $res['ApplyPrice'] = $this->applyPrice;
        }
        if (null !== $this->bizResult) {
            $res['BizResult'] = $this->bizResult;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->brandNick) {
            $res['BrandNick'] = $this->brandNick;
        }
        if (null !== $this->brandUserId) {
            $res['BrandUserId'] = $this->brandUserId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->cid) {
            $res['Cid'] = $this->cid;
        }
        if (null !== $this->commodityId) {
            $res['CommodityId'] = $this->commodityId;
        }
        if (null !== $this->deviceCode) {
            $res['DeviceCode'] = $this->deviceCode;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->holderId) {
            $res['HolderId'] = $this->holderId;
        }
        if (null !== $this->outerCode) {
            $res['OuterCode'] = $this->outerCode;
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }
        if (null !== $this->queryStr) {
            $res['QueryStr'] = $this->queryStr;
        }
        if (null !== $this->salePrice) {
            $res['SalePrice'] = $this->salePrice;
        }
        if (null !== $this->sex) {
            $res['Sex'] = $this->sex;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->v) {
            $res['V'] = $this->v;
        }
        if (null !== $this->alipayOpenId) {
            $res['AlipayOpenId'] = $this->alipayOpenId;
        }
        if (null !== $this->chargeTag) {
            $res['ChargeTag'] = $this->chargeTag;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->realCostAmount) {
            $res['RealCostAmount'] = $this->realCostAmount;
        }
        if (null !== $this->costDetail) {
            $res['CostDetail'] = $this->costDetail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScanCodeNotificationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['ApplyPrice'])) {
            $model->applyPrice = $map['ApplyPrice'];
        }
        if (isset($map['BizResult'])) {
            $model->bizResult = $map['BizResult'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['BrandNick'])) {
            $model->brandNick = $map['BrandNick'];
        }
        if (isset($map['BrandUserId'])) {
            $model->brandUserId = $map['BrandUserId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['Cid'])) {
            $model->cid = $map['Cid'];
        }
        if (isset($map['CommodityId'])) {
            $model->commodityId = $map['CommodityId'];
        }
        if (isset($map['DeviceCode'])) {
            $model->deviceCode = $map['DeviceCode'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['HolderId'])) {
            $model->holderId = $map['HolderId'];
        }
        if (isset($map['OuterCode'])) {
            $model->outerCode = $map['OuterCode'];
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }
        if (isset($map['QueryStr'])) {
            $model->queryStr = $map['QueryStr'];
        }
        if (isset($map['SalePrice'])) {
            $model->salePrice = $map['SalePrice'];
        }
        if (isset($map['Sex'])) {
            $model->sex = $map['Sex'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['V'])) {
            $model->v = $map['V'];
        }
        if (isset($map['AlipayOpenId'])) {
            $model->alipayOpenId = $map['AlipayOpenId'];
        }
        if (isset($map['ChargeTag'])) {
            $model->chargeTag = $map['ChargeTag'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['RealCostAmount'])) {
            $model->realCostAmount = $map['RealCostAmount'];
        }
        if (isset($map['CostDetail'])) {
            $model->costDetail = $map['CostDetail'];
        }

        return $model;
    }
}
