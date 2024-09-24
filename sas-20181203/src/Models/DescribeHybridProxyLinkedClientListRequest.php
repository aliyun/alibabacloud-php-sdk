<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeHybridProxyLinkedClientListRequest extends Model
{
    /**
     * @example office-proxy
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example inet-proxy-3bb11fad-37d6-4aee-9c37-b0ad1612XXXX
     *
     * @var string
     */
    public $proxyUuid;

    /**
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @example 80d2f7d6-31a9-4d7f-8ff4-7ecc42f89ca****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'clusterName' => 'ClusterName',
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'proxyUuid'   => 'ProxyUuid',
        'remark'      => 'Remark',
        'uuid'        => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->proxyUuid) {
            $res['ProxyUuid'] = $this->proxyUuid;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHybridProxyLinkedClientListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProxyUuid'])) {
            $model->proxyUuid = $map['ProxyUuid'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
