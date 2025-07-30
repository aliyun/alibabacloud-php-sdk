<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest\udPullConfig;

use AlibabaCloud\Tea\Model;

class udSyncScopeConfig extends Model
{
    /**
     * @description List of source nodes for synchronization.
     *
     * @var string[]
     */
    public $sourceScopes;

    /**
     * @description Synchronize target node, and fill in the IDaaS organization ID.
     *
     * @example ou_lyhyy6p7yf7mdrdiq5xxxx
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
     * @return udSyncScopeConfig
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
