<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeVpcFirewallAssetListRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $assetIP;

    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @var string
     */
    public $ecsInstanceName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $IPProtocol;

    /**
     * @var string
     */
    public $isAITraffic;

    /**
     * @var string
     */
    public $lang;

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
    public $peerVpcId;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'appName' => 'AppName',
        'assetIP' => 'AssetIP',
        'currentPage' => 'CurrentPage',
        'direction' => 'Direction',
        'ecsInstanceId' => 'EcsInstanceId',
        'ecsInstanceName' => 'EcsInstanceName',
        'endTime' => 'EndTime',
        'IPProtocol' => 'IPProtocol',
        'isAITraffic' => 'IsAITraffic',
        'lang' => 'Lang',
        'order' => 'Order',
        'pageSize' => 'PageSize',
        'peerVpcId' => 'PeerVpcId',
        'port' => 'Port',
        'riskLevel' => 'RiskLevel',
        'sort' => 'Sort',
        'startTime' => 'StartTime',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->assetIP) {
            $res['AssetIP'] = $this->assetIP;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }

        if (null !== $this->ecsInstanceName) {
            $res['EcsInstanceName'] = $this->ecsInstanceName;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->IPProtocol) {
            $res['IPProtocol'] = $this->IPProtocol;
        }

        if (null !== $this->isAITraffic) {
            $res['IsAITraffic'] = $this->isAITraffic;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->peerVpcId) {
            $res['PeerVpcId'] = $this->peerVpcId;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AssetIP'])) {
            $model->assetIP = $map['AssetIP'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }

        if (isset($map['EcsInstanceName'])) {
            $model->ecsInstanceName = $map['EcsInstanceName'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['IPProtocol'])) {
            $model->IPProtocol = $map['IPProtocol'];
        }

        if (isset($map['IsAITraffic'])) {
            $model->isAITraffic = $map['IsAITraffic'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PeerVpcId'])) {
            $model->peerVpcId = $map['PeerVpcId'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
