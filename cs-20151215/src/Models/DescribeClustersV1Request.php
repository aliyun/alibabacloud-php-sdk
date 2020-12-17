<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClustersV1Request extends Model
{
    /**
     * @description 通过集群名称进行模糊查询。
     *
     * @var string
     */
    public $name;

    /**
     * @description 集群类型。  Kubernetes: 专有版集群。 ManagedKubernetes：托管版集群。 Ask：Serverless集群。 ExternalKubernetes：注册集群。 ServiceMesh：ASM集群。
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description 单页大小。
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 分页数。
     *
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'name'        => 'name',
        'clusterType' => 'cluster_type',
        'pageSize'    => 'page_size',
        'pageNumber'  => 'page_number',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->clusterType) {
            $res['cluster_type'] = $this->clusterType;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['page_number'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClustersV1Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['cluster_type'])) {
            $model->clusterType = $map['cluster_type'];
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }
        if (isset($map['page_number'])) {
            $model->pageNumber = $map['page_number'];
        }

        return $model;
    }
}
