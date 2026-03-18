<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GenerateJwtAuthenticationTokenResponseBody\jwtContent;

class GenerateJwtAuthenticationTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $authenticationTokenId;

    /**
     * @var string
     */
    public $authenticationTokenType;

    /**
     * @var string
     */
    public $consumerId;

    /**
     * @var string
     */
    public $consumerType;

    /**
     * @var int
     */
    public $createTime;

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
    public $credentialProviderId;

    /**
     * @var int
     */
    public $expirationTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var jwtContent
     */
    public $jwtContent;

    /**
     * @var bool
     */
    public $revoked;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'authenticationTokenId' => 'authenticationTokenId',
        'authenticationTokenType' => 'authenticationTokenType',
        'consumerId' => 'consumerId',
        'consumerType' => 'consumerType',
        'createTime' => 'createTime',
        'creatorId' => 'creatorId',
        'creatorType' => 'creatorType',
        'credentialProviderId' => 'credentialProviderId',
        'expirationTime' => 'expirationTime',
        'instanceId' => 'instanceId',
        'jwtContent' => 'jwtContent',
        'revoked' => 'revoked',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        if (null !== $this->jwtContent) {
            $this->jwtContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authenticationTokenId) {
            $res['authenticationTokenId'] = $this->authenticationTokenId;
        }

        if (null !== $this->authenticationTokenType) {
            $res['authenticationTokenType'] = $this->authenticationTokenType;
        }

        if (null !== $this->consumerId) {
            $res['consumerId'] = $this->consumerId;
        }

        if (null !== $this->consumerType) {
            $res['consumerType'] = $this->consumerType;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->creatorId) {
            $res['creatorId'] = $this->creatorId;
        }

        if (null !== $this->creatorType) {
            $res['creatorType'] = $this->creatorType;
        }

        if (null !== $this->credentialProviderId) {
            $res['credentialProviderId'] = $this->credentialProviderId;
        }

        if (null !== $this->expirationTime) {
            $res['expirationTime'] = $this->expirationTime;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->jwtContent) {
            $res['jwtContent'] = null !== $this->jwtContent ? $this->jwtContent->toArray($noStream) : $this->jwtContent;
        }

        if (null !== $this->revoked) {
            $res['revoked'] = $this->revoked;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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

        if (isset($map['authenticationTokenType'])) {
            $model->authenticationTokenType = $map['authenticationTokenType'];
        }

        if (isset($map['consumerId'])) {
            $model->consumerId = $map['consumerId'];
        }

        if (isset($map['consumerType'])) {
            $model->consumerType = $map['consumerType'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['creatorId'])) {
            $model->creatorId = $map['creatorId'];
        }

        if (isset($map['creatorType'])) {
            $model->creatorType = $map['creatorType'];
        }

        if (isset($map['credentialProviderId'])) {
            $model->credentialProviderId = $map['credentialProviderId'];
        }

        if (isset($map['expirationTime'])) {
            $model->expirationTime = $map['expirationTime'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['jwtContent'])) {
            $model->jwtContent = jwtContent::fromMap($map['jwtContent']);
        }

        if (isset($map['revoked'])) {
            $model->revoked = $map['revoked'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
