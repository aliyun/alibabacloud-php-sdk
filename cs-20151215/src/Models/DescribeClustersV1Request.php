<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DescribeClustersV1Request extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterSpec;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $profile;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId' => 'cluster_id',
        'clusterSpec' => 'cluster_spec',
        'clusterType' => 'cluster_type',
        'name' => 'name',
        'pageNumber' => 'page_number',
        'pageSize' => 'page_size',
        'profile' => 'profile',
        'regionId' => 'region_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }

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

        if (null !== $this->regionId) {
            $res['region_id'] = $this->regionId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }

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

        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }

        return $model;
    }
}
