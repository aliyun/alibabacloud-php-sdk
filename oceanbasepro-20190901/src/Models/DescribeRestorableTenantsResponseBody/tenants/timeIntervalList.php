<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeRestorableTenantsResponseBody\tenants;

use AlibabaCloud\Tea\Model;

class timeIntervalList extends Model
{
    /**
     * @example 2023-03-13T02:43:03Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $fromArchive;

    /**
     * @example 2023-01-20T16:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example standard
     *
     * @var string
     */
    public $storageType;
    protected $_name = [
        'endTime'     => 'EndTime',
        'fromArchive' => 'FromArchive',
        'startTime'   => 'StartTime',
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return timeIntervalList
     */
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
