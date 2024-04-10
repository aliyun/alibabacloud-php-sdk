<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Tea\Model;

class ScaleInstanceRequest extends Model
{
    /**
     * @description The infrequent access (IA) storage space of the instance. Unit: GB.
     *
     * > Ignore this parameter for pay-as-you-go instances.
     * @example 1000G
     *
     * @var int
     */
    public $coldStorageSize;

    /**
     * @description The specifications of the instance. Valid values:
     *
     *   8-core 32GB (number of compute nodes: 1)
     *   16-core 64GB (number of compute nodes: 1)
     *   32-core 128GB (number of compute nodes: 2)
     *   64-core 256GB (number of compute nodes: 4)
     *   96-core 384GB (number of compute nodes: 6)
     *   128-core 512GB (number of compute nodes: 8)
     *   Others
     *
     * >
     *
     *   Set this parameter to the number of cores.
     *
     *   If you want to set this parameter to specifications with more than 1,024 compute units (CUs), you must submit a ticket.
     *
     *   This parameter is invalid for Hologres Shared Cluster instances.
     *
     *   The specifications of 8-core 32GB (number of compute nodes: 1) are for trial use only and cannot be used for production.
     *
     * @example 128
     *
     * @var int
     */
    public $cpu;

    /**
     * @var bool
     */
    public $enableServerlessComputing;

    /**
     * @description The number of gateways. Valid values: 2 to 50.
     *
     * > This parameter is required only for virtual warehouse instances.
     * @example 4
     *
     * @var int
     */
    public $gatewayCount;

    /**
     * @description The specification change type. Valid values:
     *
     *   UPGRADE
     *   DOWNGRADE
     *
     * >
     *
     *   If you set this parameter to UPGRADE, the new specifications must be higher than the original specifications. You must configure at least one of the cpu, storageSize, and coldStorageSize parameters. If you leave a parameter empty, the related configuration remains unchanged.
     *
     *   If you set this parameter to DOWNGRADE, the new specifications must be lower than the original specifications. You must configure at least one of the cpu, storageSize, and coldStorageSize parameters. If you leave a parameter empty, the related configuration remains unchanged.
     *
     * @example UPGRADE
     *
     * @var string
     */
    public $scaleType;

    /**
     * @description The standard storage space of the instance. Unit: GB.
     *
     * > Ignore this parameter for pay-as-you-go instances.
     * @example 1000G
     *
     * @var int
     */
    public $storageSize;
    protected $_name = [
        'coldStorageSize'           => 'coldStorageSize',
        'cpu'                       => 'cpu',
        'enableServerlessComputing' => 'enableServerlessComputing',
        'gatewayCount'              => 'gatewayCount',
        'scaleType'                 => 'scaleType',
        'storageSize'               => 'storageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coldStorageSize) {
            $res['coldStorageSize'] = $this->coldStorageSize;
        }
        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }
        if (null !== $this->enableServerlessComputing) {
            $res['enableServerlessComputing'] = $this->enableServerlessComputing;
        }
        if (null !== $this->gatewayCount) {
            $res['gatewayCount'] = $this->gatewayCount;
        }
        if (null !== $this->scaleType) {
            $res['scaleType'] = $this->scaleType;
        }
        if (null !== $this->storageSize) {
            $res['storageSize'] = $this->storageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScaleInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['coldStorageSize'])) {
            $model->coldStorageSize = $map['coldStorageSize'];
        }
        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }
        if (isset($map['enableServerlessComputing'])) {
            $model->enableServerlessComputing = $map['enableServerlessComputing'];
        }
        if (isset($map['gatewayCount'])) {
            $model->gatewayCount = $map['gatewayCount'];
        }
        if (isset($map['scaleType'])) {
            $model->scaleType = $map['scaleType'];
        }
        if (isset($map['storageSize'])) {
            $model->storageSize = $map['storageSize'];
        }

        return $model;
    }
}
