<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class UpdateConversationalAutomationShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $commandsShrink;

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
     * @var string
     */
    public $promptsShrink;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'commandsShrink'       => 'Commands',
        'custSpaceId'          => 'CustSpaceId',
        'enableWelcomeMessage' => 'EnableWelcomeMessage',
        'ownerId'              => 'OwnerId',
        'phoneNumber'          => 'PhoneNumber',
        'promptsShrink'        => 'Prompts',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandsShrink) {
            $res['Commands'] = $this->commandsShrink;
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
        if (null !== $this->promptsShrink) {
            $res['Prompts'] = $this->promptsShrink;
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
     * @return UpdateConversationalAutomationShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Commands'])) {
            $model->commandsShrink = $map['Commands'];
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
            $model->promptsShrink = $map['Prompts'];
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
