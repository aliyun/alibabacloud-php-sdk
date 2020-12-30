<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody\emrMainVersionList\emrMainVersion\clusterTypeInfoList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody\emrMainVersionList\emrMainVersion\clusterTypeInfoList\clusterTypeInfo\clusterServiceInfoList;
use AlibabaCloud\Tea\Model;

class clusterTypeInfo extends Model
{
    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var clusterServiceInfoList
     */
    public $clusterServiceInfoList;
    protected $_name = [
        'clusterType'            => 'ClusterType',
        'clusterServiceInfoList' => 'ClusterServiceInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->clusterServiceInfoList) {
            $res['ClusterServiceInfoList'] = null !== $this->clusterServiceInfoList ? $this->clusterServiceInfoList->toMap() : null;
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
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['ClusterServiceInfoList'])) {
            $model->clusterServiceInfoList = clusterServiceInfoList::fromMap($map['ClusterServiceInfoList']);
        }

        return $model;
    }
}
