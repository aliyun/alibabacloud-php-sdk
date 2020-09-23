<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClustersV1Request extends Model
{
    /**
     * @description 集群名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 集群类型。
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
        'name'        => 'Name',
        'clusterType' => 'ClusterType',
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
            $res['Name'] = $this->name;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
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
