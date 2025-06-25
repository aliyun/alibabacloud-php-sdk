<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyAssetScopeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyAssetScopeResponseBody\assetScope\databases;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyAssetScopeResponseBody\assetScope\hostGroups;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyAssetScopeResponseBody\assetScope\hosts;

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
     * @var string
     */
    public $scopeType;
    protected $_name = [
        'databases' => 'Databases',
        'hostGroups' => 'HostGroups',
        'hosts' => 'Hosts',
        'scopeType' => 'ScopeType',
    ];

    public function validate()
    {
        if (\is_array($this->databases)) {
            Model::validateArray($this->databases);
        }
        if (\is_array($this->hostGroups)) {
            Model::validateArray($this->hostGroups);
        }
        if (\is_array($this->hosts)) {
            Model::validateArray($this->hosts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databases) {
            if (\is_array($this->databases)) {
                $res['Databases'] = [];
                $n1 = 0;
                foreach ($this->databases as $item1) {
                    $res['Databases'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hostGroups) {
            if (\is_array($this->hostGroups)) {
                $res['HostGroups'] = [];
                $n1 = 0;
                foreach ($this->hostGroups as $item1) {
                    $res['HostGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hosts) {
            if (\is_array($this->hosts)) {
                $res['Hosts'] = [];
                $n1 = 0;
                foreach ($this->hosts as $item1) {
                    $res['Hosts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
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
        if (isset($map['Databases'])) {
            if (!empty($map['Databases'])) {
                $model->databases = [];
                $n1 = 0;
                foreach ($map['Databases'] as $item1) {
                    $model->databases[$n1] = databases::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HostGroups'])) {
            if (!empty($map['HostGroups'])) {
                $model->hostGroups = [];
                $n1 = 0;
                foreach ($map['HostGroups'] as $item1) {
                    $model->hostGroups[$n1] = hostGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Hosts'])) {
            if (!empty($map['Hosts'])) {
                $model->hosts = [];
                $n1 = 0;
                foreach ($map['Hosts'] as $item1) {
                    $model->hosts[$n1] = hosts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }

        return $model;
    }
}
