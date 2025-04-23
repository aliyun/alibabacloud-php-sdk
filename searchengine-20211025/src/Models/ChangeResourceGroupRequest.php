<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class ChangeResourceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $newResourceGroupId;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'newResourceGroupId' => 'newResourceGroupId',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newResourceGroupId) {
            $res['newResourceGroupId'] = $this->newResourceGroupId;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
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
        if (isset($map['newResourceGroupId'])) {
            $model->newResourceGroupId = $map['newResourceGroupId'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
