<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody\emrMainVersionList\emrMainVersion\clusterTypeInfoList\clusterTypeInfo;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody\emrMainVersionList\emrMainVersion\clusterTypeInfoList\clusterTypeInfo\clusterServiceInfoList\clusterServiceInfo;
use AlibabaCloud\Tea\Model;

class clusterServiceInfoList extends Model
{
    /**
     * @var clusterServiceInfo[]
     */
    public $clusterServiceInfo;
    protected $_name = [
        'clusterServiceInfo' => 'ClusterServiceInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterServiceInfo) {
            $res['ClusterServiceInfo'] = [];
            if (null !== $this->clusterServiceInfo && \is_array($this->clusterServiceInfo)) {
                $n = 0;
                foreach ($this->clusterServiceInfo as $item) {
                    $res['ClusterServiceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterServiceInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterServiceInfo'])) {
            if (!empty($map['ClusterServiceInfo'])) {
                $model->clusterServiceInfo = [];
                $n                         = 0;
                foreach ($map['ClusterServiceInfo'] as $item) {
                    $model->clusterServiceInfo[$n++] = null !== $item ? clusterServiceInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
