<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class ListServicesShrinkRequest extends Model
{
    /**
     * @description 关键字搜索。
     *
     * @example foo
     *
     * @var string
     */
    public $filter;

    /**
     * @description 所属的group。
     *
     * @example foo
     *
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $labelShrink;

    /**
     * @description 排序顺序，支持升序或将序。
     *
     * @example asc
     *
     * @var string
     */
    public $order;

    /**
     * @description 页号。
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 每页大小。
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Band类型服务主服务的UID
     *
     * @example eas-m-baxkc20nsyxxxx
     *
     * @var string
     */
    public $parentServiceUid;

    /**
     * @description 服务的类型，例如Async, OfflineTask和Standard等
     *
     * @example Async
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description 排序字段。
     *
     * @example CreateTime
     *
     * @var string
     */
    public $sort;
    protected $_name = [
        'filter'           => 'Filter',
        'groupName'        => 'GroupName',
        'labelShrink'      => 'Label',
        'order'            => 'Order',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'parentServiceUid' => 'ParentServiceUid',
        'serviceType'      => 'ServiceType',
        'sort'             => 'Sort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->labelShrink) {
            $res['Label'] = $this->labelShrink;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->parentServiceUid) {
            $res['ParentServiceUid'] = $this->parentServiceUid;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServicesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Label'])) {
            $model->labelShrink = $map['Label'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ParentServiceUid'])) {
            $model->parentServiceUid = $map['ParentServiceUid'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        return $model;
    }
}
