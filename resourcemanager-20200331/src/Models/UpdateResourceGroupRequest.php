<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class UpdateResourceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $newDisplayName;
    protected $_name = [
        'resourceGroupId' => 'ResourceGroupId',
        'newDisplayName'  => 'NewDisplayName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->newDisplayName) {
            $res['NewDisplayName'] = $this->newDisplayName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['NewDisplayName'])) {
            $model->newDisplayName = $map['NewDisplayName'];
        }

        return $model;
    }
}
