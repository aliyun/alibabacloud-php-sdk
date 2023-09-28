<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class ListResourcesForTagOptionRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * Pages start from page 1. Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * Valid values: 1 to 100 Minimum value: 1. Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of resource that is associated with the tag option. Valid values:
     *
     *   product: product
     *   Portfolio: product portfolio
     *
     * @example Product
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The ID of the tag option.
     *
     * @example tag-bp1u6mdf3d****
     *
     * @var string
     */
    public $tagOptionId;
    protected $_name = [
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'resourceType' => 'ResourceType',
        'tagOptionId'  => 'TagOptionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagOptionId) {
            $res['TagOptionId'] = $this->tagOptionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourcesForTagOptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagOptionId'])) {
            $model->tagOptionId = $map['TagOptionId'];
        }

        return $model;
    }
}
