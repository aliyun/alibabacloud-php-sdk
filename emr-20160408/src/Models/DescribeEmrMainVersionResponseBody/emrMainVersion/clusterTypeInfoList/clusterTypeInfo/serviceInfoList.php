<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeEmrMainVersionResponseBody\emrMainVersion\clusterTypeInfoList\clusterTypeInfo;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeEmrMainVersionResponseBody\emrMainVersion\clusterTypeInfoList\clusterTypeInfo\serviceInfoList\serviceInfo;
use AlibabaCloud\Tea\Model;

class serviceInfoList extends Model
{
    /**
     * @var serviceInfo[]
     */
    public $serviceInfo;
    protected $_name = [
        'serviceInfo' => 'ServiceInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceInfo) {
            $res['ServiceInfo'] = [];
            if (null !== $this->serviceInfo && \is_array($this->serviceInfo)) {
                $n = 0;
                foreach ($this->serviceInfo as $item) {
                    $res['ServiceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceInfo'])) {
            if (!empty($map['ServiceInfo'])) {
                $model->serviceInfo = [];
                $n                  = 0;
                foreach ($map['ServiceInfo'] as $item) {
                    $model->serviceInfo[$n++] = null !== $item ? serviceInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
