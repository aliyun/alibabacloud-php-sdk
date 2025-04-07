<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class ListPersistentAppInstancesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example aig-0bxls9m9arax6****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var string[]
     */
    public $appInstancePersistentIds;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @example CloudApp
     *
     * @var string
     */
    public $productType;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstancePersistentIds' => 'AppInstancePersistentIds',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'productType' => 'ProductType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->appInstancePersistentIds) {
            $res['AppInstancePersistentIds'] = $this->appInstancePersistentIds;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPersistentAppInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['AppInstancePersistentIds'])) {
            if (!empty($map['AppInstancePersistentIds'])) {
                $model->appInstancePersistentIds = $map['AppInstancePersistentIds'];
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        return $model;
    }
}
