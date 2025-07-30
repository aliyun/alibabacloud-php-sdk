<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPullConfigurationResponseBody\udPullConfiguration;

use AlibabaCloud\Tea\Model;

class udSyncScopeConfig extends Model
{
    /**
     * @description Synchronization Source Node
     *
     * @var string[]
     */
    public $sourceScopes;

    /**
     * @description Synchronization Target Node
     *
     * @example ou_asjdfhaskfhw213mnsj33sXXX
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
