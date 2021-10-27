<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesTrafficPackagesResponseBody\instanceTrafficPackageUsages;
use AlibabaCloud\Tea\Model;

class ListInstancesTrafficPackagesResponseBody extends Model
{
    /**
     * @var instanceTrafficPackageUsages[]
     */
    public $instanceTrafficPackageUsages;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceTrafficPackageUsages' => 'InstanceTrafficPackageUsages',
        'requestId'                    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTrafficPackageUsages) {
            $res['InstanceTrafficPackageUsages'] = [];
            if (null !== $this->instanceTrafficPackageUsages && \is_array($this->instanceTrafficPackageUsages)) {
                $n = 0;
                foreach ($this->instanceTrafficPackageUsages as $item) {
                    $res['InstanceTrafficPackageUsages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesTrafficPackagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTrafficPackageUsages'])) {
            if (!empty($map['InstanceTrafficPackageUsages'])) {
                $model->instanceTrafficPackageUsages = [];
                $n                                   = 0;
                foreach ($map['InstanceTrafficPackageUsages'] as $item) {
                    $model->instanceTrafficPackageUsages[$n++] = null !== $item ? instanceTrafficPackageUsages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
