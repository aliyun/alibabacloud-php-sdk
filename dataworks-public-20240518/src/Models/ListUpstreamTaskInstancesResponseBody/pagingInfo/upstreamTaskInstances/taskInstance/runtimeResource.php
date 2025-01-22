<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTaskInstancesResponseBody\pagingInfo\upstreamTaskInstances\taskInstance;

use AlibabaCloud\Dara\Model;

class runtimeResource extends Model
{
    /**
     * @var string
     */
    public $cu;
    /**
     * @var string
     */
    public $image;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
