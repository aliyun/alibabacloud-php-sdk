<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeReservedResourceResponseBody\supportResources;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeReservedResourceResponseBody\supportResources\supportResource\dataDiskSizes;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeReservedResourceResponseBody\supportResources\supportResource\systemDiskSizes;

class supportResource extends Model
{
    /**
     * @var dataDiskSizes
     */
    public $dataDiskSizes;

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
     * @var systemDiskSizes
     */
    public $systemDiskSizes;
    protected $_name = [
        'dataDiskSizes' => 'DataDiskSizes',
        'ensRegionId' => 'EnsRegionId',
        'instanceSpec' => 'InstanceSpec',
        'supportResourcesCount' => 'SupportResourcesCount',
        'systemDiskSizes' => 'SystemDiskSizes',
    ];

    public function validate()
    {
        if (null !== $this->dataDiskSizes) {
            $this->dataDiskSizes->validate();
        }
        if (null !== $this->systemDiskSizes) {
            $this->systemDiskSizes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataDiskSizes) {
            $res['DataDiskSizes'] = null !== $this->dataDiskSizes ? $this->dataDiskSizes->toArray($noStream) : $this->dataDiskSizes;
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

        if (null !== $this->systemDiskSizes) {
            $res['SystemDiskSizes'] = null !== $this->systemDiskSizes ? $this->systemDiskSizes->toArray($noStream) : $this->systemDiskSizes;
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
        if (isset($map['DataDiskSizes'])) {
            $model->dataDiskSizes = dataDiskSizes::fromMap($map['DataDiskSizes']);
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

        if (isset($map['SystemDiskSizes'])) {
            $model->systemDiskSizes = systemDiskSizes::fromMap($map['SystemDiskSizes']);
        }

        return $model;
    }
}
