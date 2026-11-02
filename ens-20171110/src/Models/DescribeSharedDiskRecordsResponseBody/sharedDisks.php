<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSharedDiskRecordsResponseBody;

use AlibabaCloud\Dara\Model;

class sharedDisks extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $diskId;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var string
     */
    public $lastDetachInstanceId;

    /**
     * @var string
     */
    public $lastDetachTime;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $performanceLevel;

    /**
     * @var string
     */
    public $recycleTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sdgId;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'diskId' => 'DiskId',
        'diskSize' => 'DiskSize',
        'lastDetachInstanceId' => 'LastDetachInstanceId',
        'lastDetachTime' => 'LastDetachTime',
        'namespace' => 'Namespace',
        'performanceLevel' => 'PerformanceLevel',
        'recycleTime' => 'RecycleTime',
        'regionId' => 'RegionId',
        'sdgId' => 'SdgId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }

        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }

        if (null !== $this->lastDetachInstanceId) {
            $res['LastDetachInstanceId'] = $this->lastDetachInstanceId;
        }

        if (null !== $this->lastDetachTime) {
            $res['LastDetachTime'] = $this->lastDetachTime;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }

        if (null !== $this->recycleTime) {
            $res['RecycleTime'] = $this->recycleTime;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sdgId) {
            $res['SdgId'] = $this->sdgId;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }

        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }

        if (isset($map['LastDetachInstanceId'])) {
            $model->lastDetachInstanceId = $map['LastDetachInstanceId'];
        }

        if (isset($map['LastDetachTime'])) {
            $model->lastDetachTime = $map['LastDetachTime'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }

        if (isset($map['RecycleTime'])) {
            $model->recycleTime = $map['RecycleTime'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SdgId'])) {
            $model->sdgId = $map['SdgId'];
        }

        return $model;
    }
}
