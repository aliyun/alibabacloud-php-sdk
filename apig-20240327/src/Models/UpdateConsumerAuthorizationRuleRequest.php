<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class UpdateConsumerAuthorizationRuleRequest extends Model
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
    protected $_name = [
        'authorizationResourceInfos' => 'authorizationResourceInfos',
        'expireMode' => 'expireMode',
        'expireTimestamp' => 'expireTimestamp',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConsumerAuthorizationRuleRequest
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

        return $model;
    }
}
