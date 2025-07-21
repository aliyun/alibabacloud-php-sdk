<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class CreateConsumerAuthorizationRuleRequest extends Model
{
    /**
     * @var AuthorizationResourceInfo[]
     */
    public $authorizationResourceInfos;

    /**
     * @example LongTerm
     *
     * @var string
     */
    public $expireMode;

    /**
     * @example 1750852089975
     *
     * @var int
     */
    public $expireTimestamp;

    /**
     * @example API
     *
     * @var string
     */
    public $parentResourceType;

    /**
     * @example API
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'authorizationResourceInfos' => 'authorizationResourceInfos',
        'expireMode' => 'expireMode',
        'expireTimestamp' => 'expireTimestamp',
        'parentResourceType' => 'parentResourceType',
        'resourceType' => 'resourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationResourceInfos) {
            $res['authorizationResourceInfos'] = [];
            if (null !== $this->authorizationResourceInfos && \is_array($this->authorizationResourceInfos)) {
                $n = 0;
                foreach ($this->authorizationResourceInfos as $item) {
                    $res['authorizationResourceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->expireMode) {
            $res['expireMode'] = $this->expireMode;
        }
        if (null !== $this->expireTimestamp) {
            $res['expireTimestamp'] = $this->expireTimestamp;
        }
        if (null !== $this->parentResourceType) {
            $res['parentResourceType'] = $this->parentResourceType;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConsumerAuthorizationRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authorizationResourceInfos'])) {
            if (!empty($map['authorizationResourceInfos'])) {
                $model->authorizationResourceInfos = [];
                $n = 0;
                foreach ($map['authorizationResourceInfos'] as $item) {
                    $model->authorizationResourceInfos[$n++] = null !== $item ? AuthorizationResourceInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['expireMode'])) {
            $model->expireMode = $map['expireMode'];
        }
        if (isset($map['expireTimestamp'])) {
            $model->expireTimestamp = $map['expireTimestamp'];
        }
        if (isset($map['parentResourceType'])) {
            $model->parentResourceType = $map['parentResourceType'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
