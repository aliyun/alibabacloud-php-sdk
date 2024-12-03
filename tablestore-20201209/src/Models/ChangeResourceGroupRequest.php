<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Tea\Model;

class ChangeResourceGroupRequest extends Model
{
    /**
     * @description The ID of the new resource group.
     *
     * This parameter is required.
     * @example rg-aek3bgek3kxhyky
     *
     * @var string
     */
    public $newResourceGroupId;

    /**
     * @description The resource ID, which is the instance name.
     *
     * This parameter is required.
     * @example first-ins
     *
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'newResourceGroupId' => 'NewResourceGroupId',
        'resourceId'         => 'ResourceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newResourceGroupId) {
            $res['NewResourceGroupId'] = $this->newResourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewResourceGroupId'])) {
            $model->newResourceGroupId = $map['NewResourceGroupId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
