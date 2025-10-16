<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeOutgoingAssetListRequest extends Model
{
    /**
     * @var string
     */
    public $assetsRegion;

    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $IPType;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $natGatewayName;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $privateIP;

    /**
     * @var string
     */
    public $publicIP;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $securityRisk;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'assetsRegion' => 'AssetsRegion',
        'currentPage' => 'CurrentPage',
        'endTime' => 'EndTime',
        'groupName' => 'GroupName',
        'IPType' => 'IPType',
        'lang' => 'Lang',
        'natGatewayId' => 'NatGatewayId',
        'natGatewayName' => 'NatGatewayName',
        'order' => 'Order',
        'pageSize' => 'PageSize',
        'privateIP' => 'PrivateIP',
        'publicIP' => 'PublicIP',
        'resourceType' => 'ResourceType',
        'securityRisk' => 'SecurityRisk',
        'sort' => 'Sort',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetsRegion) {
            $res['AssetsRegion'] = $this->assetsRegion;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->IPType) {
            $res['IPType'] = $this->IPType;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->natGatewayName) {
            $res['NatGatewayName'] = $this->natGatewayName;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->privateIP) {
            $res['PrivateIP'] = $this->privateIP;
        }

        if (null !== $this->publicIP) {
            $res['PublicIP'] = $this->publicIP;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->securityRisk) {
            $res['SecurityRisk'] = $this->securityRisk;
        }

        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AssetsRegion'])) {
            $model->assetsRegion = $map['AssetsRegion'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['IPType'])) {
            $model->IPType = $map['IPType'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['NatGatewayName'])) {
            $model->natGatewayName = $map['NatGatewayName'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PrivateIP'])) {
            $model->privateIP = $map['PrivateIP'];
        }

        if (isset($map['PublicIP'])) {
            $model->publicIP = $map['PublicIP'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['SecurityRisk'])) {
            $model->securityRisk = $map['SecurityRisk'];
        }

        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
