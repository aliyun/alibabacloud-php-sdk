<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeNetworkChannelResponseBody;

use AlibabaCloud\Dara\Model;

class channelInfos extends Model
{
    /**
     * @var string
     */
    public $channelName;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $notes;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $targetDBClusterId;

    /**
     * @var string
     */
    public $targetIp;

    /**
     * @var string
     */
    public $targetPort;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'channelName' => 'ChannelName',
        'DBClusterId' => 'DBClusterId',
        'notes' => 'Notes',
        'regionId' => 'RegionId',
        'targetDBClusterId' => 'TargetDBClusterId',
        'targetIp' => 'TargetIp',
        'targetPort' => 'TargetPort',
        'targetType' => 'TargetType',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->notes) {
            $res['Notes'] = $this->notes;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->targetDBClusterId) {
            $res['TargetDBClusterId'] = $this->targetDBClusterId;
        }

        if (null !== $this->targetIp) {
            $res['TargetIp'] = $this->targetIp;
        }

        if (null !== $this->targetPort) {
            $res['TargetPort'] = $this->targetPort;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['Notes'])) {
            $model->notes = $map['Notes'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TargetDBClusterId'])) {
            $model->targetDBClusterId = $map['TargetDBClusterId'];
        }

        if (isset($map['TargetIp'])) {
            $model->targetIp = $map['TargetIp'];
        }

        if (isset($map['TargetPort'])) {
            $model->targetPort = $map['TargetPort'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
