<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateWorkerRequest\channels;

use AlibabaCloud\Dara\Model;

class config extends Model
{
    /**
     * @var string
     */
    public $cardTemplateId;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $messageType;

    /**
     * @var string
     */
    public $robotCode;

    /**
     * @var bool
     */
    public $showThinking;

    /**
     * @var bool
     */
    public $showToolCalls;

    /**
     * @var bool
     */
    public $streamingEnabled;
    protected $_name = [
        'cardTemplateId' => 'CardTemplateId',
        'clientId' => 'ClientId',
        'extension' => 'Extension',
        'messageType' => 'MessageType',
        'robotCode' => 'RobotCode',
        'showThinking' => 'ShowThinking',
        'showToolCalls' => 'ShowToolCalls',
        'streamingEnabled' => 'StreamingEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cardTemplateId) {
            $res['CardTemplateId'] = $this->cardTemplateId;
        }

        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }

        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }

        if (null !== $this->robotCode) {
            $res['RobotCode'] = $this->robotCode;
        }

        if (null !== $this->showThinking) {
            $res['ShowThinking'] = $this->showThinking;
        }

        if (null !== $this->showToolCalls) {
            $res['ShowToolCalls'] = $this->showToolCalls;
        }

        if (null !== $this->streamingEnabled) {
            $res['StreamingEnabled'] = $this->streamingEnabled;
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
        if (isset($map['CardTemplateId'])) {
            $model->cardTemplateId = $map['CardTemplateId'];
        }

        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }

        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }

        if (isset($map['RobotCode'])) {
            $model->robotCode = $map['RobotCode'];
        }

        if (isset($map['ShowThinking'])) {
            $model->showThinking = $map['ShowThinking'];
        }

        if (isset($map['ShowToolCalls'])) {
            $model->showToolCalls = $map['ShowToolCalls'];
        }

        if (isset($map['StreamingEnabled'])) {
            $model->streamingEnabled = $map['StreamingEnabled'];
        }

        return $model;
    }
}
