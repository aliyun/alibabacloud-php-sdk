<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyAssetScopeResponseBody;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyAssetScopeResponseBody\assetScope\databases;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyAssetScopeResponseBody\assetScope\hostGroups;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyAssetScopeResponseBody\assetScope\hosts;
use AlibabaCloud\Tea\Model;

class assetScope extends Model
{
    /**
     * @var databases[]
     */
    public $databases;

    /**
     * @var hostGroups[]
     */
    public $hostGroups;

    /**
     * @var hosts[]
     */
    public $hosts;

    /**
     * @example All
     *
     * @var string
     */
    public $scopeType;
    protected $_name = [
        'databases'  => 'Databases',
        'hostGroups' => 'HostGroups',
        'hosts'      => 'Hosts',
        'scopeType'  => 'ScopeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databases) {
            $res['Databases'] = [];
            if (null !== $this->databases && \is_array($this->databases)) {
                $n = 0;
                foreach ($this->databases as $item) {
                    $res['Databases'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hostGroups) {
            $res['HostGroups'] = [];
            if (null !== $this->hostGroups && \is_array($this->hostGroups)) {
                $n = 0;
                foreach ($this->hostGroups as $item) {
                    $res['HostGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hosts) {
            $res['Hosts'] = [];
            if (null !== $this->hosts && \is_array($this->hosts)) {
                $n = 0;
                foreach ($this->hosts as $item) {
                    $res['Hosts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assetScope
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Databases'])) {
            if (!empty($map['Databases'])) {
                $model->databases = [];
                $n                = 0;
                foreach ($map['Databases'] as $item) {
                    $model->databases[$n++] = null !== $item ? databases::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HostGroups'])) {
            if (!empty($map['HostGroups'])) {
                $model->hostGroups = [];
                $n                 = 0;
                foreach ($map['HostGroups'] as $item) {
                    $model->hostGroups[$n++] = null !== $item ? hostGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Hosts'])) {
            if (!empty($map['Hosts'])) {
                $model->hosts = [];
                $n            = 0;
                foreach ($map['Hosts'] as $item) {
                    $model->hosts[$n++] = null !== $item ? hosts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }

        return $model;
    }
}
