<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceSpecRequest extends Model
{
    /**
     * @description The size of the storage space, in GB. The required storage space varies based on the cluster specifications:
     * - 62C400G: 800 GB to 10 TB. The preceding minimum storage space sizes are the default storage space sizes of the corresponding cluster specification plans.
     * @example 200
     *
     * @var int
     */
    public $diskSize;

    /**
     * @description Disk type.
     *
     * @example cloud_essd_pl1
     *
     * @var string
     */
    public $diskType;

    /**
     * @description Specifies whether to perform only a dry run for the request. Default value: false. Valid values:
     * - false: If the DryRun parameter is set to false, no dry run is performed and the DryRunResult parameter returns false.
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The specifications of the cluster. You can specify one of the following four plans:
     * - 62C400GB: indicates 62 CPU cores and 400 GB of memory.
     * @example 14C70GB
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The ID of the OceanBase cluster.
     *
     * This parameter is required.
     * @example ob3h8ytroxxxxx
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'diskSize'      => 'DiskSize',
        'diskType'      => 'DiskType',
        'dryRun'        => 'DryRun',
        'instanceClass' => 'InstanceClass',
        'instanceId'    => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceSpecRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
