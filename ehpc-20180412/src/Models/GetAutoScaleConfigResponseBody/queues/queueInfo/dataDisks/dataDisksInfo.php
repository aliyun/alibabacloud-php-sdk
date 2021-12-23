<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues\queueInfo\dataDisks;

use AlibabaCloud\Tea\Model;

class dataDisksInfo extends Model
{
    /**
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @var bool
     */
    public $dataDiskDeleteWithInstance;

    /**
     * @var bool
     */
    public $dataDiskEncrypted;

    /**
     * @var string
     */
    public $dataDiskKMSKeyId;

    /**
     * @var string
     */
    public $dataDiskPerformanceLevel;

    /**
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
