<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrMainVersionResponseBody\emrMainVersionList\emrMainVersion\clusterTypeInfoList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrMainVersionResponseBody\emrMainVersionList\emrMainVersion\clusterTypeInfoList\clusterTypeInfo\serviceInfoList;
use AlibabaCloud\Tea\Model;

class clusterTypeInfo extends Model
{
    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var serviceInfoList
     */
    public $serviceInfoList;
    protected $_name = [
        'clusterType'     => 'ClusterType',
        'serviceInfoList' => 'ServiceInfoList',
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
        if (null !== $this->serviceInfoList) {
            $res['ServiceInfoList'] = null !== $this->serviceInfoList ? $this->serviceInfoList->toMap() : null;
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
        if (isset($map['ServiceInfoList'])) {
            $model->serviceInfoList = serviceInfoList::fromMap($map['ServiceInfoList']);
        }

        return $model;
    }
}
