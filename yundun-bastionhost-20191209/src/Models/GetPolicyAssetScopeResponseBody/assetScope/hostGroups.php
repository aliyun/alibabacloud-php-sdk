<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyAssetScopeResponseBody\assetScope;

use AlibabaCloud\Dara\Model;

class hostGroups extends Model
{
    /**
     * @var string[]
     */
    public $accountNames;

    /**
     * @var string
     */
    public $accountScopeType;

    /**
     * @var string
     */
    public $hostGroupId;
    protected $_name = [
        'accountNames' => 'AccountNames',
        'accountScopeType' => 'AccountScopeType',
        'hostGroupId' => 'HostGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->accountNames)) {
            Model::validateArray($this->accountNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountNames) {
            if (\is_array($this->accountNames)) {
                $res['AccountNames'] = [];
                $n1 = 0;
                foreach ($this->accountNames as $item1) {
                    $res['AccountNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->accountScopeType) {
            $res['AccountScopeType'] = $this->accountScopeType;
        }

        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
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
        if (isset($map['AccountNames'])) {
            if (!empty($map['AccountNames'])) {
                $model->accountNames = [];
                $n1 = 0;
                foreach ($map['AccountNames'] as $item1) {
                    $model->accountNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AccountScopeType'])) {
            $model->accountScopeType = $map['AccountScopeType'];
        }

        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }

        return $model;
    }
}
