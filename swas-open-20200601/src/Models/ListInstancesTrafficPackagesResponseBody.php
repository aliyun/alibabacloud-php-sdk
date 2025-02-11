<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesTrafficPackagesResponseBody\instanceTrafficPackageUsages;

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
        if (\is_array($this->instanceTrafficPackageUsages)) {
            Model::validateArray($this->instanceTrafficPackageUsages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceTrafficPackageUsages) {
            if (\is_array($this->instanceTrafficPackageUsages)) {
                $res['InstanceTrafficPackageUsages'] = [];
                $n1                                  = 0;
                foreach ($this->instanceTrafficPackageUsages as $item1) {
                    $res['InstanceTrafficPackageUsages'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InstanceTrafficPackageUsages'])) {
            if (!empty($map['InstanceTrafficPackageUsages'])) {
                $model->instanceTrafficPackageUsages = [];
                $n1                                  = 0;
                foreach ($map['InstanceTrafficPackageUsages'] as $item1) {
                    $model->instanceTrafficPackageUsages[$n1++] = instanceTrafficPackageUsages::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
