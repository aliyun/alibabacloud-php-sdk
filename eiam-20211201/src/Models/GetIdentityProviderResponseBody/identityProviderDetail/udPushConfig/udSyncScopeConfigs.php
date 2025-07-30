<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\udPushConfig;

use AlibabaCloud\Tea\Model;

class udSyncScopeConfigs extends Model
{
    /**
     * @description Synchronization source node.
     *
     * @var string[]
     */
    public $sourceScopes;

    /**
     * @description Synchronization target node.
     *
     * @example ou_123xxxx
     *
     * @var string
     */
    public $targetScope;
    protected $_name = [
        'sourceScopes' => 'SourceScopes',
        'targetScope' => 'TargetScope',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceScopes) {
            $res['SourceScopes'] = $this->sourceScopes;
        }
        if (null !== $this->targetScope) {
            $res['TargetScope'] = $this->targetScope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return udSyncScopeConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceScopes'])) {
            if (!empty($map['SourceScopes'])) {
                $model->sourceScopes = $map['SourceScopes'];
            }
        }
        if (isset($map['TargetScope'])) {
            $model->targetScope = $map['TargetScope'];
        }

        return $model;
    }
}
