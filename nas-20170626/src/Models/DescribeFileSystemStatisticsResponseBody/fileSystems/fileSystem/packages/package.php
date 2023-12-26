<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponseBody\fileSystems\fileSystem\packages;

use AlibabaCloud\Tea\Model;

class package extends Model
{
    /**
     * @description The end time of the validity period for the storage plan.
     *
     * @example 2020-01-05T16:00:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The ID of the storage plan.
     *
     * @example naspackage-0be9c4b624-37****
     *
     * @var string
     */
    public $packageId;

    /**
     * @description The capacity of the storage plan.
     *
     * @example 107374182400
     *
     * @var int
     */
    public $size;

    /**
     * @description The start time of the validity period for the storage plan.
     *
     * @example 2019-12-05T01:40:56Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'expiredTime' => 'ExpiredTime',
        'packageId'   => 'PackageId',
        'size'        => 'Size',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return package
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
