<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerAuthorizationRulesRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerAuthorizationRulesRequest\authorizationRules\resourceIdentifier;

class authorizationRules extends Model
{
    /**
     * @var string
     */
    public $consumerGroupId;

    /**
     * @var string
     */
    public $consumerId;

    /**
     * @var string
     */
    public $expireMode;

    /**
     * @var int
     */
    public $expireTimestamp;

    /**
     * @var string
     */
    public $principalType;

    /**
     * @var resourceIdentifier
     */
    public $resourceIdentifier;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'consumerGroupId' => 'consumerGroupId',
        'consumerId' => 'consumerId',
        'expireMode' => 'expireMode',
        'expireTimestamp' => 'expireTimestamp',
        'principalType' => 'principalType',
        'resourceIdentifier' => 'resourceIdentifier',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
        if (null !== $this->resourceIdentifier) {
            $this->resourceIdentifier->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerGroupId) {
            $res['consumerGroupId'] = $this->consumerGroupId;
        }

        if (null !== $this->consumerId) {
            $res['consumerId'] = $this->consumerId;
        }

        if (null !== $this->expireMode) {
            $res['expireMode'] = $this->expireMode;
        }

        if (null !== $this->expireTimestamp) {
            $res['expireTimestamp'] = $this->expireTimestamp;
        }

        if (null !== $this->principalType) {
            $res['principalType'] = $this->principalType;
        }

        if (null !== $this->resourceIdentifier) {
            $res['resourceIdentifier'] = null !== $this->resourceIdentifier ? $this->resourceIdentifier->toArray($noStream) : $this->resourceIdentifier;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
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
        if (isset($map['consumerGroupId'])) {
            $model->consumerGroupId = $map['consumerGroupId'];
        }

        if (isset($map['consumerId'])) {
            $model->consumerId = $map['consumerId'];
        }

        if (isset($map['expireMode'])) {
            $model->expireMode = $map['expireMode'];
        }

        if (isset($map['expireTimestamp'])) {
            $model->expireTimestamp = $map['expireTimestamp'];
        }

        if (isset($map['principalType'])) {
            $model->principalType = $map['principalType'];
        }

        if (isset($map['resourceIdentifier'])) {
            $model->resourceIdentifier = resourceIdentifier::fromMap($map['resourceIdentifier']);
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
