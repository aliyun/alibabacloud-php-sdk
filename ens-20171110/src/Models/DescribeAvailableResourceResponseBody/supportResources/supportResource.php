<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceResponseBody\supportResources;

use AlibabaCloud\Dara\Model;

class supportResource extends Model
{
    /**
     * @var string
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var string
     */
    public $supportResourcesCount;

    /**
     * @var string
     */
    public $systemDiskSize;
    protected $_name = [
        'dataDiskSize' => 'DataDiskSize',
        'ensRegionId' => 'EnsRegionId',
        'instanceSpec' => 'InstanceSpec',
        'supportResourcesCount' => 'SupportResourcesCount',
        'systemDiskSize' => 'SystemDiskSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }

        if (null !== $this->supportResourcesCount) {
            $res['SupportResourcesCount'] = $this->supportResourcesCount;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
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
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }

        if (isset($map['SupportResourcesCount'])) {
            $model->supportResourcesCount = $map['SupportResourcesCount'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
