<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ClaimChatResponseBody\data;

use AlibabaCloud\Tea\Model;

class chatContexts extends Model
{
    /**
     * @example 226****-cbb6-****-8fea-1e71baf7bfa7
     *
     * @var string
     */
    public $accessChannelId;

    /**
     * @var string
     */
    public $accessChannelName;

    /**
     * @example Web
     *
     * @var string
     */
    public $accessChannelType;

    /**
     * @example true
     *
     * @var bool
     */
    public $beingAssigned;

    /**
     * @var string
     */
    public $callVariables;

    /**
     * @example INBOUND
     *
     * @var string
     */
    public $chatType;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example chat-65382141036853491
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'accessChannelId'   => 'AccessChannelId',
        'accessChannelName' => 'AccessChannelName',
        'accessChannelType' => 'AccessChannelType',
        'beingAssigned'     => 'BeingAssigned',
        'callVariables'     => 'CallVariables',
        'chatType'          => 'ChatType',
        'instanceId'        => 'InstanceId',
        'jobId'             => 'JobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessChannelId) {
            $res['AccessChannelId'] = $this->accessChannelId;
        }
        if (null !== $this->accessChannelName) {
            $res['AccessChannelName'] = $this->accessChannelName;
        }
        if (null !== $this->accessChannelType) {
            $res['AccessChannelType'] = $this->accessChannelType;
        }
        if (null !== $this->beingAssigned) {
            $res['BeingAssigned'] = $this->beingAssigned;
        }
        if (null !== $this->callVariables) {
            $res['CallVariables'] = $this->callVariables;
        }
        if (null !== $this->chatType) {
            $res['ChatType'] = $this->chatType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chatContexts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessChannelId'])) {
            $model->accessChannelId = $map['AccessChannelId'];
        }
        if (isset($map['AccessChannelName'])) {
            $model->accessChannelName = $map['AccessChannelName'];
        }
        if (isset($map['AccessChannelType'])) {
            $model->accessChannelType = $map['AccessChannelType'];
        }
        if (isset($map['BeingAssigned'])) {
            $model->beingAssigned = $map['BeingAssigned'];
        }
        if (isset($map['CallVariables'])) {
            $model->callVariables = $map['CallVariables'];
        }
        if (isset($map['ChatType'])) {
            $model->chatType = $map['ChatType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
