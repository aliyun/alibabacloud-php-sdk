<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody\emrMainVersionList\emrMainVersion\clusterTypeInfoList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody\emrMainVersionList\emrMainVersion\clusterTypeInfoList\clusterTypeInfo\clusterServiceInfoList;
use AlibabaCloud\Tea\Model;

class clusterTypeInfo extends Model
{
    /**
     * @var clusterServiceInfoList
     */
    public $clusterServiceInfoList;

    /**
     * @example HADOOP
     *
     * @var string
     */
    public $clusterType;
    protected $_name = [
        'clusterServiceInfoList' => 'ClusterServiceInfoList',
        'clusterType'            => 'ClusterType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterServiceInfoList) {
            $res['ClusterServiceInfoList'] = null !== $this->clusterServiceInfoList ? $this->clusterServiceInfoList->toMap() : null;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterTypeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterServiceInfoList'])) {
            $model->clusterServiceInfoList = clusterServiceInfoList::fromMap($map['ClusterServiceInfoList']);
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        return $model;
    }
}
