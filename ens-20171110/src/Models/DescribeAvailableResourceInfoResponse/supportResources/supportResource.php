<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponse\supportResources;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponse\supportResources\supportResource\bandwidthTypes;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponse\supportResources\supportResource\ensRegionIds;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponse\supportResources\supportResource\ensRegionIdsExtends;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponse\supportResources\supportResource\instanceSpeces;
use AlibabaCloud\Tea\Model;

class supportResource extends Model
{
    /**
     * @var int
     */
    public $dataDiskMinSize;

    /**
     * @var int
     */
    public $dataDiskMaxSize;

    /**
     * @var int
     */
    public $systemDiskMinSize;

    /**
     * @var int
     */
    public $systemDiskMaxSize;

    /**
     * @var ensRegionIdsExtends
     */
    public $ensRegionIdsExtends;

    /**
     * @var ensRegionIds
     */
    public $ensRegionIds;

    /**
     * @var instanceSpeces
     */
    public $instanceSpeces;

    /**
     * @var bandwidthTypes
     */
    public $bandwidthTypes;
    protected $_name = [
        'dataDiskMinSize'     => 'DataDiskMinSize',
        'dataDiskMaxSize'     => 'DataDiskMaxSize',
        'systemDiskMinSize'   => 'SystemDiskMinSize',
        'systemDiskMaxSize'   => 'SystemDiskMaxSize',
        'ensRegionIdsExtends' => 'EnsRegionIdsExtends',
        'ensRegionIds'        => 'EnsRegionIds',
        'instanceSpeces'      => 'InstanceSpeces',
        'bandwidthTypes'      => 'BandwidthTypes',
    ];

    public function validate()
    {
        Model::validateRequired('dataDiskMinSize', $this->dataDiskMinSize, true);
        Model::validateRequired('dataDiskMaxSize', $this->dataDiskMaxSize, true);
        Model::validateRequired('systemDiskMinSize', $this->systemDiskMinSize, true);
        Model::validateRequired('systemDiskMaxSize', $this->systemDiskMaxSize, true);
        Model::validateRequired('ensRegionIdsExtends', $this->ensRegionIdsExtends, true);
        Model::validateRequired('ensRegionIds', $this->ensRegionIds, true);
        Model::validateRequired('instanceSpeces', $this->instanceSpeces, true);
        Model::validateRequired('bandwidthTypes', $this->bandwidthTypes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDiskMinSize) {
            $res['DataDiskMinSize'] = $this->dataDiskMinSize;
        }
        if (null !== $this->dataDiskMaxSize) {
            $res['DataDiskMaxSize'] = $this->dataDiskMaxSize;
        }
        if (null !== $this->systemDiskMinSize) {
            $res['SystemDiskMinSize'] = $this->systemDiskMinSize;
        }
        if (null !== $this->systemDiskMaxSize) {
            $res['SystemDiskMaxSize'] = $this->systemDiskMaxSize;
        }
        if (null !== $this->ensRegionIdsExtends) {
            $res['EnsRegionIdsExtends'] = null !== $this->ensRegionIdsExtends ? $this->ensRegionIdsExtends->toMap() : null;
        }
        if (null !== $this->ensRegionIds) {
            $res['EnsRegionIds'] = null !== $this->ensRegionIds ? $this->ensRegionIds->toMap() : null;
        }
        if (null !== $this->instanceSpeces) {
            $res['InstanceSpeces'] = null !== $this->instanceSpeces ? $this->instanceSpeces->toMap() : null;
        }
        if (null !== $this->bandwidthTypes) {
            $res['BandwidthTypes'] = null !== $this->bandwidthTypes ? $this->bandwidthTypes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataDiskMinSize'])) {
            $model->dataDiskMinSize = $map['DataDiskMinSize'];
        }
        if (isset($map['DataDiskMaxSize'])) {
            $model->dataDiskMaxSize = $map['DataDiskMaxSize'];
        }
        if (isset($map['SystemDiskMinSize'])) {
            $model->systemDiskMinSize = $map['SystemDiskMinSize'];
        }
        if (isset($map['SystemDiskMaxSize'])) {
            $model->systemDiskMaxSize = $map['SystemDiskMaxSize'];
        }
        if (isset($map['EnsRegionIdsExtends'])) {
            $model->ensRegionIdsExtends = ensRegionIdsExtends::fromMap($map['EnsRegionIdsExtends']);
        }
        if (isset($map['EnsRegionIds'])) {
            $model->ensRegionIds = ensRegionIds::fromMap($map['EnsRegionIds']);
        }
        if (isset($map['InstanceSpeces'])) {
            $model->instanceSpeces = instanceSpeces::fromMap($map['InstanceSpeces']);
        }
        if (isset($map['BandwidthTypes'])) {
            $model->bandwidthTypes = bandwidthTypes::fromMap($map['BandwidthTypes']);
        }

        return $model;
    }
}
