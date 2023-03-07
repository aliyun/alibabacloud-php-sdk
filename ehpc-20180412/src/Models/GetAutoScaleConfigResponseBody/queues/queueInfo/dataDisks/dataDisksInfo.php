<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues\queueInfo\dataDisks;

use AlibabaCloud\Tea\Model;

class dataDisksInfo extends Model
{
    /**
     * @description The type of the data disk. Valid values:
     *
     * - cloud: basic disk
     * @example cloud_efficiency
     *
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @description Indicates whether the data disk is released when the node is released. Valid values:
     *
     * - false
     * @example true
     *
     * @var bool
     */
    public $dataDiskDeleteWithInstance;

    /**
     * @description Indicates whether the data disk is encrypted. Valid values:
     *
     * - false
     * @example false
     *
     * @var bool
     */
    public $dataDiskEncrypted;

    /**
     * @description The KMS key ID of the data disk.
     *
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40826X
     *
     * @var string
     */
    public $dataDiskKMSKeyId;

    /**
     * @description The performance level of the ESSD used as the data disk. The parameter takes effect only when the DataDisks.N.DataDiskCategory parameter is set to cloud_essd. Valid values:
     *
     * - PL3: A single ESSD can deliver up to 1,000,000 random read/write IOPS.
     * @example PL1
     *
     * @var string
     */
    public $dataDiskPerformanceLevel;

    /**
     * @description The capacity of the data disk. Unit: GB.
     *
     * Valid values: 40 to 500
     * @example 40
     *
     * @var int
     */
    public $dataDiskSize;
    protected $_name = [
        'dataDiskCategory'           => 'DataDiskCategory',
        'dataDiskDeleteWithInstance' => 'DataDiskDeleteWithInstance',
        'dataDiskEncrypted'          => 'DataDiskEncrypted',
        'dataDiskKMSKeyId'           => 'DataDiskKMSKeyId',
        'dataDiskPerformanceLevel'   => 'DataDiskPerformanceLevel',
        'dataDiskSize'               => 'DataDiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDiskCategory) {
            $res['DataDiskCategory'] = $this->dataDiskCategory;
        }
        if (null !== $this->dataDiskDeleteWithInstance) {
            $res['DataDiskDeleteWithInstance'] = $this->dataDiskDeleteWithInstance;
        }
        if (null !== $this->dataDiskEncrypted) {
            $res['DataDiskEncrypted'] = $this->dataDiskEncrypted;
        }
        if (null !== $this->dataDiskKMSKeyId) {
            $res['DataDiskKMSKeyId'] = $this->dataDiskKMSKeyId;
        }
        if (null !== $this->dataDiskPerformanceLevel) {
            $res['DataDiskPerformanceLevel'] = $this->dataDiskPerformanceLevel;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDisksInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataDiskCategory'])) {
            $model->dataDiskCategory = $map['DataDiskCategory'];
        }
        if (isset($map['DataDiskDeleteWithInstance'])) {
            $model->dataDiskDeleteWithInstance = $map['DataDiskDeleteWithInstance'];
        }
        if (isset($map['DataDiskEncrypted'])) {
            $model->dataDiskEncrypted = $map['DataDiskEncrypted'];
        }
        if (isset($map['DataDiskKMSKeyId'])) {
            $model->dataDiskKMSKeyId = $map['DataDiskKMSKeyId'];
        }
        if (isset($map['DataDiskPerformanceLevel'])) {
            $model->dataDiskPerformanceLevel = $map['DataDiskPerformanceLevel'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }

        return $model;
    }
}
