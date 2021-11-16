<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClustersV1Request extends Model
{
    /**
     * @description 集群规格。
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @description 集群类型。
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description 通过集群名称进行模糊查询。
     *
     * @var string
     */
    public $name;

    /**
     * @description 分页数。
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 单页大小。
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 集群标识。
     *
     * @var string
     */
    public $profile;
    protected $_name = [
        'clusterSpec' => 'cluster_spec',
        'clusterType' => 'cluster_type',
        'name'        => 'name',
        'pageNumber'  => 'page_number',
        'pageSize'    => 'page_size',
        'profile'     => 'profile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterSpec) {
            $res['cluster_spec'] = $this->clusterSpec;
        }
        if (null !== $this->clusterType) {
            $res['cluster_type'] = $this->clusterType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->pageNumber) {
            $res['page_number'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->profile) {
            $res['profile'] = $this->profile;
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
        if (isset($map['cluster_spec'])) {
            $model->clusterSpec = $map['cluster_spec'];
        }
        if (isset($map['cluster_type'])) {
            $model->clusterType = $map['cluster_type'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['page_number'])) {
            $model->pageNumber = $map['page_number'];
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }
        if (isset($map['profile'])) {
            $model->profile = $map['profile'];
        }

        return $model;
    }
}
