<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetTrialAccessChannelResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetTrialAccessChannelResponseBody\data\channelScripts;

class data extends Model
{
    /**
     * @var string
     */
    public $accessChannelId;

    /**
     * @var string
     */
    public $accessChannelType;

    /**
     * @var string
     */
    public $builderType;

    /**
     * @var channelScripts[]
     */
    public $channelScripts;

    /**
     * @var string
     */
    public $channelSetting;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var int
     */
    public $expirationTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nluEngine;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $updatedTime;

    /**
     * @var string
     */
    public $visitorToken;
    protected $_name = [
        'accessChannelId' => 'AccessChannelId',
        'accessChannelType' => 'AccessChannelType',
        'builderType' => 'BuilderType',
        'channelScripts' => 'ChannelScripts',
        'channelSetting' => 'ChannelSetting',
        'createdTime' => 'CreatedTime',
        'expirationTime' => 'ExpirationTime',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'nluEngine' => 'NluEngine',
        'state' => 'State',
        'updatedTime' => 'UpdatedTime',
        'visitorToken' => 'VisitorToken',
    ];

    public function validate()
    {
        if (\is_array($this->channelScripts)) {
            Model::validateArray($this->channelScripts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessChannelId) {
            $res['AccessChannelId'] = $this->accessChannelId;
        }

        if (null !== $this->accessChannelType) {
            $res['AccessChannelType'] = $this->accessChannelType;
        }

        if (null !== $this->builderType) {
            $res['BuilderType'] = $this->builderType;
        }

        if (null !== $this->channelScripts) {
            if (\is_array($this->channelScripts)) {
                $res['ChannelScripts'] = [];
                $n1 = 0;
                foreach ($this->channelScripts as $item1) {
                    $res['ChannelScripts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->channelSetting) {
            $res['ChannelSetting'] = $this->channelSetting;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->expirationTime) {
            $res['ExpirationTime'] = $this->expirationTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nluEngine) {
            $res['NluEngine'] = $this->nluEngine;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        if (null !== $this->visitorToken) {
            $res['VisitorToken'] = $this->visitorToken;
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
        if (isset($map['AccessChannelId'])) {
            $model->accessChannelId = $map['AccessChannelId'];
        }

        if (isset($map['AccessChannelType'])) {
            $model->accessChannelType = $map['AccessChannelType'];
        }

        if (isset($map['BuilderType'])) {
            $model->builderType = $map['BuilderType'];
        }

        if (isset($map['ChannelScripts'])) {
            if (!empty($map['ChannelScripts'])) {
                $model->channelScripts = [];
                $n1 = 0;
                foreach ($map['ChannelScripts'] as $item1) {
                    $model->channelScripts[$n1] = channelScripts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ChannelSetting'])) {
            $model->channelSetting = $map['ChannelSetting'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['ExpirationTime'])) {
            $model->expirationTime = $map['ExpirationTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NluEngine'])) {
            $model->nluEngine = $map['NluEngine'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        if (isset($map['VisitorToken'])) {
            $model->visitorToken = $map['VisitorToken'];
        }

        return $model;
    }
}
