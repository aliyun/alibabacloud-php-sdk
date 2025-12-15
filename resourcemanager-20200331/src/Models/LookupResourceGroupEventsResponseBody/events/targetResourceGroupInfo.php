<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\LookupResourceGroupEventsResponseBody\events;

use AlibabaCloud\Dara\Model;

class targetResourceGroupInfo extends Model
{
    /**
     * @var string
     */
    public $resourceGroupDisplayName;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'resourceGroupDisplayName' => 'ResourceGroupDisplayName',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceGroupDisplayName) {
            $res['ResourceGroupDisplayName'] = $this->resourceGroupDisplayName;
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
        if (isset($map['ResourceGroupDisplayName'])) {
            $model->resourceGroupDisplayName = $map['ResourceGroupDisplayName'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
