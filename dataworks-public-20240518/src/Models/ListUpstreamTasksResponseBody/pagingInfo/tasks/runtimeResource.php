<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTasksResponseBody\pagingInfo\tasks;

use AlibabaCloud\Tea\Model;

class runtimeResource extends Model
{
    /**
     * @description The default number of compute units (CUs) configured for task running.
     *
     * @example 0.25
     *
     * @var string
     */
    public $cu;

    /**
     * @description The ID of the image configured for task running.
     *
     * @example i-xxxxxx
     *
     * @var string
     */
    public $image;

    /**
     * @description The ID of the resource group for scheduling configured for task running.
     *
     * @example S_res_group_524258031846018_1684XXXXXXXXX
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'cu'              => 'Cu',
        'image'           => 'Image',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cu) {
            $res['Cu'] = $this->cu;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runtimeResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cu'])) {
            $model->cu = $map['Cu'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
