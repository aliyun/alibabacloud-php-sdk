<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeClusterRecoverTimeResponseBody;

use AlibabaCloud\Tea\Model;

class restoreRanges extends Model
{
    /**
     * @description The beginning of the time range to which data can be restored.
     *
     * @example 2023-10-16T19:33:20Z
     *
     * @var string
     */
    public $restoreBeginTime;

    /**
     * @description The end of the time range to which data can be restored.
     *
     * @example 2023-10-16T19:43:20Z
     *
     * @var string
     */
    public $restoreEndTime;

    /**
     * @description The method used to restore data. Valid values:
     *
     *   **PointInTime** (default): Data is restored based on point in time
     *
     * @example PointInTime
     *
     * @var string
     */
    public $restoreType;
    protected $_name = [
        'restoreBeginTime' => 'RestoreBeginTime',
        'restoreEndTime'   => 'RestoreEndTime',
        'restoreType'      => 'RestoreType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->restoreBeginTime) {
            $res['RestoreBeginTime'] = $this->restoreBeginTime;
        }
        if (null !== $this->restoreEndTime) {
            $res['RestoreEndTime'] = $this->restoreEndTime;
        }
        if (null !== $this->restoreType) {
            $res['RestoreType'] = $this->restoreType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return restoreRanges
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RestoreBeginTime'])) {
            $model->restoreBeginTime = $map['RestoreBeginTime'];
        }
        if (isset($map['RestoreEndTime'])) {
            $model->restoreEndTime = $map['RestoreEndTime'];
        }
        if (isset($map['RestoreType'])) {
            $model->restoreType = $map['RestoreType'];
        }

        return $model;
    }
}
