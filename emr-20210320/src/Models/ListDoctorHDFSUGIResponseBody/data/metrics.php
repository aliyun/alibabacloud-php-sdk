<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSUGIResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSUGIResponseBody\data\metrics\totalDataSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSUGIResponseBody\data\metrics\totalDirCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSUGIResponseBody\data\metrics\totalFileCount;

class metrics extends Model
{
    /**
     * @var totalDataSize
     */
    public $totalDataSize;

    /**
     * @var totalDirCount
     */
    public $totalDirCount;

    /**
     * @var totalFileCount
     */
    public $totalFileCount;
    protected $_name = [
        'totalDataSize' => 'TotalDataSize',
        'totalDirCount' => 'TotalDirCount',
        'totalFileCount' => 'TotalFileCount',
    ];

    public function validate()
    {
        if (null !== $this->totalDataSize) {
            $this->totalDataSize->validate();
        }
        if (null !== $this->totalDirCount) {
            $this->totalDirCount->validate();
        }
        if (null !== $this->totalFileCount) {
            $this->totalFileCount->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->totalDataSize) {
            $res['TotalDataSize'] = null !== $this->totalDataSize ? $this->totalDataSize->toArray($noStream) : $this->totalDataSize;
        }

        if (null !== $this->totalDirCount) {
            $res['TotalDirCount'] = null !== $this->totalDirCount ? $this->totalDirCount->toArray($noStream) : $this->totalDirCount;
        }

        if (null !== $this->totalFileCount) {
            $res['TotalFileCount'] = null !== $this->totalFileCount ? $this->totalFileCount->toArray($noStream) : $this->totalFileCount;
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
