<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\packages;

use AlibabaCloud\Tea\Model;

class package extends Model
{
    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $packageId;

    /**
     * @var string
     */
    public $packageType;
    protected $_name = [
        'startTime'   => 'StartTime',
        'expiredTime' => 'ExpiredTime',
        'size'        => 'Size',
        'packageId'   => 'PackageId',
        'packageType' => 'PackageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }

        return $model;
    }
}
