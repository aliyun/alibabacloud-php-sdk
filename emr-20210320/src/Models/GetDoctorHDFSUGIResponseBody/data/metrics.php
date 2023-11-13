<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHDFSUGIResponseBody\data;

use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHDFSUGIResponseBody\data\metrics\totalDataSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHDFSUGIResponseBody\data\metrics\totalDirCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHDFSUGIResponseBody\data\metrics\totalFileCount;
use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @description The total data size.
     *
     * @var totalDataSize
     */
    public $totalDataSize;

    /**
     * @description The total number of directories.
     *
     * @var totalDirCount
     */
    public $totalDirCount;

    /**
     * @description The total number of files.
     *
     * @var totalFileCount
     */
    public $totalFileCount;
    protected $_name = [
        'totalDataSize'  => 'TotalDataSize',
        'totalDirCount'  => 'TotalDirCount',
        'totalFileCount' => 'TotalFileCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalDataSize) {
            $res['TotalDataSize'] = null !== $this->totalDataSize ? $this->totalDataSize->toMap() : null;
        }
        if (null !== $this->totalDirCount) {
            $res['TotalDirCount'] = null !== $this->totalDirCount ? $this->totalDirCount->toMap() : null;
        }
        if (null !== $this->totalFileCount) {
            $res['TotalFileCount'] = null !== $this->totalFileCount ? $this->totalFileCount->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalDataSize'])) {
            $model->totalDataSize = totalDataSize::fromMap($map['TotalDataSize']);
        }
        if (isset($map['TotalDirCount'])) {
            $model->totalDirCount = totalDirCount::fromMap($map['TotalDirCount']);
        }
        if (isset($map['TotalFileCount'])) {
            $model->totalFileCount = totalFileCount::fromMap($map['TotalFileCount']);
        }

        return $model;
    }
}
