<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;

class GetOAuthAuthorizationSessionResponseBody extends Model
{
    /**
     * @var string
     */
    public $authenticationTokenId;

    /**
     * @var string
     */
    public $authorizationUrl;

    /**
     * @var string
     */
    public $consumerId;

    /**
     * @var string
     */
    public $consumerType;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $creatorType;

    /**
     * @var string
     */
    public $credentialProviderIdentifier;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorDescription;

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
    public $sessionId;

    /**
     * @var string
     */
    public $sessionStatus;

    /**
     * @var string
     */
    public $sessionUri;
    protected $_name = [
        'authenticationTokenId' => 'authenticationTokenId',
        'authorizationUrl' => 'authorizationUrl',
        'consumerId' => 'consumerId',
        'consumerType' => 'consumerType',
        'creatorId' => 'creatorId',
        'creatorType' => 'creatorType',
        'credentialProviderIdentifier' => 'credentialProviderIdentifier',
        'errorCode' => 'errorCode',
        'errorDescription' => 'errorDescription',
        'expirationTime' => 'expirationTime',
        'instanceId' => 'instanceId',
        'sessionId' => 'sessionId',
        'sessionStatus' => 'sessionStatus',
        'sessionUri' => 'sessionUri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authenticationTokenId) {
            $res['authenticationTokenId'] = $this->authenticationTokenId;
        }

        if (null !== $this->authorizationUrl) {
            $res['authorizationUrl'] = $this->authorizationUrl;
        }

        if (null !== $this->consumerId) {
            $res['consumerId'] = $this->consumerId;
        }

        if (null !== $this->consumerType) {
            $res['consumerType'] = $this->consumerType;
        }

        if (null !== $this->creatorId) {
            $res['creatorId'] = $this->creatorId;
        }

        if (null !== $this->creatorType) {
            $res['creatorType'] = $this->creatorType;
        }

        if (null !== $this->credentialProviderIdentifier) {
            $res['credentialProviderIdentifier'] = $this->credentialProviderIdentifier;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorDescription) {
            $res['errorDescription'] = $this->errorDescription;
        }

        if (null !== $this->expirationTime) {
            $res['expirationTime'] = $this->expirationTime;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->sessionStatus) {
            $res['sessionStatus'] = $this->sessionStatus;
        }

        if (null !== $this->sessionUri) {
            $res['sessionUri'] = $this->sessionUri;
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
        if (isset($map['authenticationTokenId'])) {
            $model->authenticationTokenId = $map['authenticationTokenId'];
        }

        if (isset($map['authorizationUrl'])) {
            $model->authorizationUrl = $map['authorizationUrl'];
        }

        if (isset($map['consumerId'])) {
            $model->consumerId = $map['consumerId'];
        }

        if (isset($map['consumerType'])) {
            $model->consumerType = $map['consumerType'];
        }

        if (isset($map['creatorId'])) {
            $model->creatorId = $map['creatorId'];
        }

        if (isset($map['creatorType'])) {
            $model->creatorType = $map['creatorType'];
        }

        if (isset($map['credentialProviderIdentifier'])) {
            $model->credentialProviderIdentifier = $map['credentialProviderIdentifier'];
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorDescription'])) {
            $model->errorDescription = $map['errorDescription'];
        }

        if (isset($map['expirationTime'])) {
            $model->expirationTime = $map['expirationTime'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['sessionStatus'])) {
            $model->sessionStatus = $map['sessionStatus'];
        }

        if (isset($map['sessionUri'])) {
            $model->sessionUri = $map['sessionUri'];
        }

        return $model;
    }
}
