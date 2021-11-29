<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeEmrMainVersionResponseBody\emrMainVersion;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeEmrMainVersionResponseBody\emrMainVersion\clusterTypeInfoList\clusterTypeInfo;
use AlibabaCloud\Tea\Model;

class clusterTypeInfoList extends Model
{
    /**
     * @var clusterTypeInfo[]
     */
    public $clusterTypeInfo;
    protected $_name = [
        'clusterTypeInfo' => 'ClusterTypeInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterTypeInfo) {
            $res['ClusterTypeInfo'] = [];
            if (null !== $this->clusterTypeInfo && \is_array($this->clusterTypeInfo)) {
                $n = 0;
                foreach ($this->clusterTypeInfo as $item) {
                    $res['ClusterTypeInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterTypeInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterTypeInfo'])) {
            if (!empty($map['ClusterTypeInfo'])) {
                $model->clusterTypeInfo = [];
                $n                      = 0;
                foreach ($map['ClusterTypeInfo'] as $item) {
                    $model->clusterTypeInfo[$n++] = null !== $item ? clusterTypeInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
