<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class UpdateConversationalAutomationShrinkRequest extends Model
{
    /**
     * @description The commands.
     *
     * @var string
     */
    public $commandsShrink;

    /**
     * @description The space ID of the RAM user within the independent software vendor (ISV) account or the instance ID of the customer of Alibaba Cloud.
     *
     * This parameter is required.
     * @example 2993****
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description Specifies whether to enable the welcoming message.
     *
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
     * @description The phone number of the enterprise.
     *
     * This parameter is required.
     * @example 86130000***
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The opening remarks.
     *
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
