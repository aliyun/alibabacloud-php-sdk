<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianChatBot\V20241105\Models;

use AlibabaCloud\Dara\Model;

class SseChatRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $senderId;

    /**
     * @var string
     */
    public $senderNick;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $utterance;

    /**
     * @var string
     */
    public $vendorParam;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId' => 'AppId',
        'command' => 'Command',
        'senderId' => 'SenderId',
        'senderNick' => 'SenderNick',
        'sessionId' => 'SessionId',
        'utterance' => 'Utterance',
        'vendorParam' => 'VendorParam',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }

        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }

        if (null !== $this->senderNick) {
            $res['SenderNick'] = $this->senderNick;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->utterance) {
            $res['Utterance'] = $this->utterance;
        }

        if (null !== $this->vendorParam) {
            $res['VendorParam'] = $this->vendorParam;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }

        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }

        if (isset($map['SenderNick'])) {
            $model->senderNick = $map['SenderNick'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Utterance'])) {
            $model->utterance = $map['Utterance'];
        }

        if (isset($map['VendorParam'])) {
            $model->vendorParam = $map['VendorParam'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
