<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class DisAssociateTagOptionFromResourceRequest extends Model
{
    /**
     * @description The ID of the resource with which the tag option is associated.
     *
     * @example prod-bp14katy3d****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The ID of the tag option.
     *
     * @example tag-bp1u6mdf3d****
     *
     * @var string
     */
    public $tagOptionId;
    protected $_name = [
        'resourceId'  => 'ResourceId',
        'tagOptionId' => 'TagOptionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->tagOptionId) {
            $res['TagOptionId'] = $this->tagOptionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisAssociateTagOptionFromResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['TagOptionId'])) {
            $model->tagOptionId = $map['TagOptionId'];
        }

        return $model;
    }
}
