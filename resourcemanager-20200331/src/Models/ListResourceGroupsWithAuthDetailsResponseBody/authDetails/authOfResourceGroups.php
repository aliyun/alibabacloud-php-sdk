<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourceGroupsWithAuthDetailsResponseBody\authDetails;

use AlibabaCloud\Dara\Model;

class authOfResourceGroups extends Model
{
    /**
     * @var bool
     */
    public $hasPermission;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'hasPermission' => 'HasPermission',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasPermission) {
            $res['HasPermission'] = $this->hasPermission;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['HasPermission'])) {
            $model->hasPermission = $map['HasPermission'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
