<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeInstanceRecoverTimeResponseBody;

use AlibabaCloud\Tea\Model;

class restoreRanges extends Model
{
    /**
     * @example 2023-10-16T19:33:20Z
     *
     * @var string
     */
    public $restoreBeginTime;

    /**
     * @example 2023-10-16T19:43:20Z
     *
     * @var string
     */
    public $restoreEndTime;

    /**
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
