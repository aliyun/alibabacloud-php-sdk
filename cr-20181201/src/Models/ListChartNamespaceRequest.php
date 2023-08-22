<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class ListChartNamespaceRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example cri-kmsiwlxxdcva****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the namespace.
     *
     * @example test
     *
     * @var string
     */
    public $namespaceName;

    /**
     * @description The status of the namespace. Valid values:
     *
     *   `NORMAL`: The namespace is normal.
     *   `DELETING`: The namespace is being deleted.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $namespaceStatus;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries to return on each page.
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
     * @return ListChartNamespaceRequest
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
