<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeRestorableTenantsResponseBody\tenants;

use AlibabaCloud\Dara\Model;

class timeIntervalList extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var bool
     */
    public $fromArchive;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $storageType;
    protected $_name = [
        'endTime' => 'EndTime',
        'fromArchive' => 'FromArchive',
        'startTime' => 'StartTime',
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->fromArchive) {
            $res['FromArchive'] = $this->fromArchive;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FromArchive'])) {
            $model->fromArchive = $map['FromArchive'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
