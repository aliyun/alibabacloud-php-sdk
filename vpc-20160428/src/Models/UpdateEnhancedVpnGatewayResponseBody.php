<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateEnhancedVpnGatewayResponseBody\eniInstanceIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateEnhancedVpnGatewayResponseBody\tags;

class UpdateEnhancedVpnGatewayResponseBody extends Model
{
    /**
     * @var bool
     */
    public $autoPropagate;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $disasterRecoveryVSwitchId;

    /**
     * @var bool
     */
    public $enableBgp;

    /**
     * @var eniInstanceIds
     */
    public $eniInstanceIds;

    /**
     * @var string
     */
    public $gatewayType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpnGatewayId;

    /**
     * @var string
     */
    public $vpnType;
    protected $_name = [
        'autoPropagate' => 'AutoPropagate',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'disasterRecoveryVSwitchId' => 'DisasterRecoveryVSwitchId',
        'enableBgp' => 'EnableBgp',
        'eniInstanceIds' => 'EniInstanceIds',
        'gatewayType' => 'GatewayType',
        'name' => 'Name',
        'networkType' => 'NetworkType',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'tag' => 'Tag',
        'tags' => 'Tags',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'vpnGatewayId' => 'VpnGatewayId',
        'vpnType' => 'VpnType',
    ];

    public function validate()
    {
        if (null !== $this->eniInstanceIds) {
            $this->eniInstanceIds->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPropagate) {
            $res['AutoPropagate'] = $this->autoPropagate;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->disasterRecoveryVSwitchId) {
            $res['DisasterRecoveryVSwitchId'] = $this->disasterRecoveryVSwitchId;
        }

        if (null !== $this->enableBgp) {
            $res['EnableBgp'] = $this->enableBgp;
        }

        if (null !== $this->eniInstanceIds) {
            $res['EniInstanceIds'] = null !== $this->eniInstanceIds ? $this->eniInstanceIds->toArray($noStream) : $this->eniInstanceIds;
        }

        if (null !== $this->gatewayType) {
            $res['GatewayType'] = $this->gatewayType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }

        if (null !== $this->vpnType) {
            $res['VpnType'] = $this->vpnType;
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
        if (isset($map['AutoPropagate'])) {
            $model->autoPropagate = $map['AutoPropagate'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisasterRecoveryVSwitchId'])) {
            $model->disasterRecoveryVSwitchId = $map['DisasterRecoveryVSwitchId'];
        }

        if (isset($map['EnableBgp'])) {
            $model->enableBgp = $map['EnableBgp'];
        }

        if (isset($map['EniInstanceIds'])) {
            $model->eniInstanceIds = eniInstanceIds::fromMap($map['EniInstanceIds']);
        }

        if (isset($map['GatewayType'])) {
            $model->gatewayType = $map['GatewayType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }

        if (isset($map['VpnType'])) {
            $model->vpnType = $map['VpnType'];
        }

        return $model;
    }
}
