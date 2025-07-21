<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerAuthorizationRulesRequest;

use AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerAuthorizationRulesRequest\authorizationRules\resourceIdentifier;
use AlibabaCloud\Tea\Model;

class authorizationRules extends Model
{
    /**
     * @description The consumer ID.
     *
     * @example cs-cu08olem1hkokaut34i0
     *
     * @var string
     */
    public $consumerId;

    /**
     * @description The expiration mode. Valid values: LongTerm and ShortTerm.
     *
     * @example LongTerm
     *
     * @var string
     */
    public $expireMode;

    /**
     * @description The expiration timestamp.
     *
     * @example 174116222x
     *
     * @var int
     */
    public $expireTimestamp;

    /**
     * @description The resource identifier, which is provided to non-standard code sources for space reuse.
     *
     * @var resourceIdentifier
     */
    public $resourceIdentifier;

    /**
     * @description The resource type.
     *
     * @example HttpApiRoute
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'consumerId' => 'consumerId',
        'expireMode' => 'expireMode',
        'expireTimestamp' => 'expireTimestamp',
        'resourceIdentifier' => 'resourceIdentifier',
        'resourceType' => 'resourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerId) {
            $res['consumerId'] = $this->consumerId;
        }
        if (null !== $this->expireMode) {
            $res['expireMode'] = $this->expireMode;
        }
        if (null !== $this->expireTimestamp) {
            $res['expireTimestamp'] = $this->expireTimestamp;
        }
        if (null !== $this->resourceIdentifier) {
            $res['resourceIdentifier'] = null !== $this->resourceIdentifier ? $this->resourceIdentifier->toMap() : null;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorizationRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['consumerId'])) {
            $model->consumerId = $map['consumerId'];
        }
        if (isset($map['expireMode'])) {
            $model->expireMode = $map['expireMode'];
        }
        if (isset($map['expireTimestamp'])) {
            $model->expireTimestamp = $map['expireTimestamp'];
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
