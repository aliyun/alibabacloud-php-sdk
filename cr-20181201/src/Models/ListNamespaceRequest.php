<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class ListNamespaceRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * @example cri-94klsruryslx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of entries returned per page.
     *
     * @example test-namespace
     *
     * @var string
     */
    public $namespaceName;

    /**
     * @description The ID of the namespace.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $namespaceStatus;

    /**
     * @description The list of namespaces.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The ID of the request.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'namespaceName'   => 'NamespaceName',
        'namespaceStatus' => 'NamespaceStatus',
        'pageNo'          => 'PageNo',
        'pageSize'        => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }
        if (null !== $this->namespaceStatus) {
            $res['NamespaceStatus'] = $this->namespaceStatus;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNamespaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }
        if (isset($map['NamespaceStatus'])) {
            $model->namespaceStatus = $map['NamespaceStatus'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
