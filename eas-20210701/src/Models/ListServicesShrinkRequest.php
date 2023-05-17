<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class ListServicesShrinkRequest extends Model
{
    /**
     * @description {
     * }
     * @example foo
     *
     * @var string
     */
    public $filter;

    /**
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
     * @description 所属的group。
     *
     * @example asc
     *
     * @var string
     */
    public $order;

    /**
     * @description 376577
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $parentServiceUid;

    /**
     * @description 服务所属的资源组名称或ID。
     *
     * @example eas-r-hd0qwy8cxxxx
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description 服务名。
     *
     * @example echo_test
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description 服务运行的状态。
     *
     * @example Running
     *
     * @var string
     */
    public $serviceStatus;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @example eas-m-c9iw3yitxxxx
     *
     * @var string
     */
    public $serviceUid;

    /**
     * @description 服务的类型定义。
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
        'resourceName'     => 'ResourceName',
        'serviceName'      => 'ServiceName',
        'serviceStatus'    => 'ServiceStatus',
        'serviceType'      => 'ServiceType',
        'serviceUid'       => 'ServiceUid',
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
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->serviceUid) {
            $res['ServiceUid'] = $this->serviceUid;
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
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['ServiceUid'])) {
            $model->serviceUid = $map['ServiceUid'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        return $model;
    }
}
