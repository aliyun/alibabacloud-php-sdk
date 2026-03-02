<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class RoleGrantCmd extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var AuthorizationResource[]
     */
    public $authorizationResourceList;

    /**
     * @var int
     */
    public $roleId;
    protected $_name = [
        'accountId' => 'accountId',
        'authorizationResourceList' => 'authorizationResourceList',
        'roleId' => 'roleId',
    ];

    public function validate()
    {
        if (\is_array($this->authorizationResourceList)) {
            Model::validateArray($this->authorizationResourceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->authorizationResourceList) {
            if (\is_array($this->authorizationResourceList)) {
                $res['authorizationResourceList'] = [];
                $n1 = 0;
                foreach ($this->authorizationResourceList as $item1) {
                    $res['authorizationResourceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->roleId) {
            $res['roleId'] = $this->roleId;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['authorizationResourceList'])) {
            if (!empty($map['authorizationResourceList'])) {
                $model->authorizationResourceList = [];
                $n1 = 0;
                foreach ($map['authorizationResourceList'] as $item1) {
                    $model->authorizationResourceList[$n1] = AuthorizationResource::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['roleId'])) {
            $model->roleId = $map['roleId'];
        }

        return $model;
    }
}
