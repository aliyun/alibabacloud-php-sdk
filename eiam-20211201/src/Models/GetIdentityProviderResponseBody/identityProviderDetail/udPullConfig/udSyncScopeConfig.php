<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\udPullConfig;

use AlibabaCloud\Dara\Model;

class udSyncScopeConfig extends Model
{
    /**
     * @var string[]
     */
    public $sourceScopes;
    /**
     * @var string
     */
    public $targetScope;
    protected $_name = [
        'sourceScopes' => 'SourceScopes',
        'targetScope'  => 'TargetScope',
    ];

    public function validate()
    {
        if (\is_array($this->sourceScopes)) {
            Model::validateArray($this->sourceScopes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceScopes) {
            if (\is_array($this->sourceScopes)) {
                $res['SourceScopes'] = [];
                $n1                  = 0;
                foreach ($this->sourceScopes as $item1) {
                    $res['SourceScopes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->targetScope) {
            $res['TargetScope'] = $this->targetScope;
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
        if (isset($map['SourceScopes'])) {
            if (!empty($map['SourceScopes'])) {
                $model->sourceScopes = [];
                $n1                  = 0;
                foreach ($map['SourceScopes'] as $item1) {
                    $model->sourceScopes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TargetScope'])) {
            $model->targetScope = $map['TargetScope'];
        }

        return $model;
    }
}
