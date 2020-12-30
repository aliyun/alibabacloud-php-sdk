<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\Tea\Model;

class GetComputeJobLogRequest extends Model
{
    /**
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobLogName;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'jobGroupId' => 'JobGroupId',
        'jobId'      => 'JobId',
        'jobLogName' => 'JobLogName',
        'size'       => 'Size',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobLogName) {
            $res['JobLogName'] = $this->jobLogName;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetComputeJobLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobLogName'])) {
            $model->jobLogName = $map['JobLogName'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
