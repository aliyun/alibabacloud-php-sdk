<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrMainVersionResponseBody\emrMainVersionList\emrMainVersion\clusterTypeInfoList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrMainVersionResponseBody\emrMainVersionList\emrMainVersion\clusterTypeInfoList\clusterTypeInfo\serviceInfoList;
use AlibabaCloud\Tea\Model;

class clusterTypeInfo extends Model
{
    /**
     * @var serviceInfoList
     */
    public $serviceInfoList;

    /**
     * @var string
     */
    public $clusterType;
    protected $_name = [
        'serviceInfoList' => 'ServiceInfoList',
        'clusterType'     => 'ClusterType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceInfoList) {
            $res['ServiceInfoList'] = null !== $this->serviceInfoList ? $this->serviceInfoList->toMap() : null;
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
        if (isset($map['ServiceInfoList'])) {
            $model->serviceInfoList = serviceInfoList::fromMap($map['ServiceInfoList']);
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        return $model;
    }
}
