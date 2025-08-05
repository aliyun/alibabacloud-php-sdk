<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class CreateConsumerAuthorizationRuleRequest extends Model
{
    /**
     * @var AuthorizationResourceInfo[]
     */
    public $authorizationResourceInfos;

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
    public $parentResourceType;

    /**
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

    public function validate()
    {
        if (\is_array($this->authorizationResourceInfos)) {
            Model::validateArray($this->authorizationResourceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationResourceInfos) {
            if (\is_array($this->authorizationResourceInfos)) {
                $res['authorizationResourceInfos'] = [];
                $n1 = 0;
                foreach ($this->authorizationResourceInfos as $item1) {
                    $res['authorizationResourceInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authorizationResourceInfos'])) {
            if (!empty($map['authorizationResourceInfos'])) {
                $model->authorizationResourceInfos = [];
                $n1 = 0;
                foreach ($map['authorizationResourceInfos'] as $item1) {
                    $model->authorizationResourceInfos[$n1] = AuthorizationResourceInfo::fromMap($item1);
                    ++$n1;
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
