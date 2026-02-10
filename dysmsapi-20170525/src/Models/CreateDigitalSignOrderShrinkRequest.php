<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CreateDigitalSignOrderShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $extendMessage;

    /**
     * @var string
     */
    public $orderContextShrink;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $qualificationId;

    /**
     * @var int
     */
    public $qualificationVersion;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $signId;

    /**
     * @var int
     */
    public $signIndustry;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var int
     */
    public $signSource;

    /**
     * @var string
     */
    public $submitter;
    protected $_name = [
        'extendMessage' => 'ExtendMessage',
        'orderContextShrink' => 'OrderContext',
        'orderType' => 'OrderType',
        'ownerId' => 'OwnerId',
        'qualificationId' => 'QualificationId',
        'qualificationVersion' => 'QualificationVersion',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'signId' => 'SignId',
        'signIndustry' => 'SignIndustry',
        'signName' => 'SignName',
        'signSource' => 'SignSource',
        'submitter' => 'Submitter',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extendMessage) {
            $res['ExtendMessage'] = $this->extendMessage;
        }

        if (null !== $this->orderContextShrink) {
            $res['OrderContext'] = $this->orderContextShrink;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->qualificationId) {
            $res['QualificationId'] = $this->qualificationId;
        }

        if (null !== $this->qualificationVersion) {
            $res['QualificationVersion'] = $this->qualificationVersion;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->signId) {
            $res['SignId'] = $this->signId;
        }

        if (null !== $this->signIndustry) {
            $res['SignIndustry'] = $this->signIndustry;
        }

        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        if (null !== $this->signSource) {
            $res['SignSource'] = $this->signSource;
        }

        if (null !== $this->submitter) {
            $res['Submitter'] = $this->submitter;
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
        if (isset($map['ExtendMessage'])) {
            $model->extendMessage = $map['ExtendMessage'];
        }

        if (isset($map['OrderContext'])) {
            $model->orderContextShrink = $map['OrderContext'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['QualificationId'])) {
            $model->qualificationId = $map['QualificationId'];
        }

        if (isset($map['QualificationVersion'])) {
            $model->qualificationVersion = $map['QualificationVersion'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SignId'])) {
            $model->signId = $map['SignId'];
        }

        if (isset($map['SignIndustry'])) {
            $model->signIndustry = $map['SignIndustry'];
        }

        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        if (isset($map['SignSource'])) {
            $model->signSource = $map['SignSource'];
        }

        if (isset($map['Submitter'])) {
            $model->submitter = $map['Submitter'];
        }

        return $model;
    }
}
