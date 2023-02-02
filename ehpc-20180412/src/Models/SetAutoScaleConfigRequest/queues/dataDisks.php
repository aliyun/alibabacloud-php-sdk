<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SetAutoScaleConfigRequest\queues;

use AlibabaCloud\Tea\Model;

class dataDisks extends Model
{
    /**
     * @example cloud_efficiency
     *
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @example true
     *
     * @var bool
     */
    public $dataDiskDeleteWithInstance;

    /**
     * @example false
     *
     * @var bool
     */
    public $dataDiskEncrypted;

    /**
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40826X
     *
     * @var string
     */
    public $dataDiskKMSKeyId;

    /**
     * @example PL1
     *
     * @var string
     */
    public $dataDiskPerformanceLevel;

    /**
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
     * @return dataDisks
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
