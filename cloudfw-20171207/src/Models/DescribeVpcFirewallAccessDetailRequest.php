<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeVpcFirewallAccessDetailRequest extends Model
{
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
    public $endTime;

    /**
     * @var string
     */
    public $IPProtocol;

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
    public $peerAssetIP;

    /**
     * @var string
     */
    public $peerAssetInstanceId;

    /**
     * @var string
     */
    public $peerAssetInstanceName;

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
        'assetIP' => 'AssetIP',
        'currentPage' => 'CurrentPage',
        'direction' => 'Direction',
        'endTime' => 'EndTime',
        'IPProtocol' => 'IPProtocol',
        'lang' => 'Lang',
        'order' => 'Order',
        'pageSize' => 'PageSize',
        'peerAssetIP' => 'PeerAssetIP',
        'peerAssetInstanceId' => 'PeerAssetInstanceId',
        'peerAssetInstanceName' => 'PeerAssetInstanceName',
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
        if (null !== $this->assetIP) {
            $res['AssetIP'] = $this->assetIP;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->IPProtocol) {
            $res['IPProtocol'] = $this->IPProtocol;
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

        if (null !== $this->peerAssetIP) {
            $res['PeerAssetIP'] = $this->peerAssetIP;
        }

        if (null !== $this->peerAssetInstanceId) {
            $res['PeerAssetInstanceId'] = $this->peerAssetInstanceId;
        }

        if (null !== $this->peerAssetInstanceName) {
            $res['PeerAssetInstanceName'] = $this->peerAssetInstanceName;
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
        if (isset($map['AssetIP'])) {
            $model->assetIP = $map['AssetIP'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['IPProtocol'])) {
            $model->IPProtocol = $map['IPProtocol'];
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

        if (isset($map['PeerAssetIP'])) {
            $model->peerAssetIP = $map['PeerAssetIP'];
        }

        if (isset($map['PeerAssetInstanceId'])) {
            $model->peerAssetInstanceId = $map['PeerAssetInstanceId'];
        }

        if (isset($map['PeerAssetInstanceName'])) {
            $model->peerAssetInstanceName = $map['PeerAssetInstanceName'];
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
