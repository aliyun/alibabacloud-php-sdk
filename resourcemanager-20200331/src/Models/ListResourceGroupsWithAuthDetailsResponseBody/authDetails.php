<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourceGroupsWithAuthDetailsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourceGroupsWithAuthDetailsResponseBody\authDetails\authOfResourceGroups;

class authDetails extends Model
{
    /**
     * @var bool
     */
    public $accountScopeAuth;

    /**
     * @var authOfResourceGroups[]
     */
    public $authOfResourceGroups;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $service;
    protected $_name = [
        'accountScopeAuth' => 'AccountScopeAuth',
        'authOfResourceGroups' => 'AuthOfResourceGroups',
        'resourceType' => 'ResourceType',
        'service' => 'Service',
    ];

    public function validate()
    {
        if (\is_array($this->authOfResourceGroups)) {
            Model::validateArray($this->authOfResourceGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountScopeAuth) {
            $res['AccountScopeAuth'] = $this->accountScopeAuth;
        }

        if (null !== $this->authOfResourceGroups) {
            if (\is_array($this->authOfResourceGroups)) {
                $res['AuthOfResourceGroups'] = [];
                $n1 = 0;
                foreach ($this->authOfResourceGroups as $item1) {
                    $res['AuthOfResourceGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->service) {
            $res['Service'] = $this->service;
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
        if (isset($map['AccountScopeAuth'])) {
            $model->accountScopeAuth = $map['AccountScopeAuth'];
        }

        if (isset($map['AuthOfResourceGroups'])) {
            if (!empty($map['AuthOfResourceGroups'])) {
                $model->authOfResourceGroups = [];
                $n1 = 0;
                foreach ($map['AuthOfResourceGroups'] as $item1) {
                    $model->authOfResourceGroups[$n1] = authOfResourceGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }

        return $model;
    }
}
