<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\SDK\Cams\V20200606\Models\UpdateConversationalAutomationRequest\commands;
use AlibabaCloud\Tea\Model;

class UpdateConversationalAutomationRequest extends Model
{
    /**
     * @var commands[]
     */
    public $commands;

    /**
     * @description This parameter is required.
     *
     * @example 示例值
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableWelcomeMessage;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description This parameter is required.
     *
     * @example 86130000***
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string[]
     */
    public $prompts;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'commands'             => 'Commands',
        'custSpaceId'          => 'CustSpaceId',
        'enableWelcomeMessage' => 'EnableWelcomeMessage',
        'ownerId'              => 'OwnerId',
        'phoneNumber'          => 'PhoneNumber',
        'prompts'              => 'Prompts',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commands) {
            $res['Commands'] = [];
            if (null !== $this->commands && \is_array($this->commands)) {
                $n = 0;
                foreach ($this->commands as $item) {
                    $res['Commands'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->enableWelcomeMessage) {
            $res['EnableWelcomeMessage'] = $this->enableWelcomeMessage;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->prompts) {
            $res['Prompts'] = $this->prompts;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConversationalAutomationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Commands'])) {
            if (!empty($map['Commands'])) {
                $model->commands = [];
                $n               = 0;
                foreach ($map['Commands'] as $item) {
                    $model->commands[$n++] = null !== $item ? commands::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['EnableWelcomeMessage'])) {
            $model->enableWelcomeMessage = $map['EnableWelcomeMessage'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['Prompts'])) {
            if (!empty($map['Prompts'])) {
                $model->prompts = $map['Prompts'];
            }
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
