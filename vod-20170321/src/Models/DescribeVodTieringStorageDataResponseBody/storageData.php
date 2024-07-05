<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTieringStorageDataResponseBody;

use AlibabaCloud\Tea\Model;

class storageData extends Model
{
    /**
     * @description The data that is stored less than a month. Unit: bytes.
     *
     * @example 123
     *
     * @var int
     */
    public $lessthanMonthDatasize;

    /**
     * @description The region in which data is queried.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description The storage type.
     *
     * @example IA
     *
     * @var string
     */
    public $storageClass;

    /**
     * @description The storage usage. Unit: bytes.
     *
     * @example 1234
     *
     * @var int
     */
    public $storageUtilization;

    /**
     * @description The timestamp of the data returned. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2023-05-29T01:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'lessthanMonthDatasize' => 'LessthanMonthDatasize',
        'region'                => 'Region',
        'storageClass'          => 'StorageClass',
        'storageUtilization'    => 'StorageUtilization',
        'timeStamp'             => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lessthanMonthDatasize) {
            $res['LessthanMonthDatasize'] = $this->lessthanMonthDatasize;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }
        if (null !== $this->storageUtilization) {
            $res['StorageUtilization'] = $this->storageUtilization;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LessthanMonthDatasize'])) {
            $model->lessthanMonthDatasize = $map['LessthanMonthDatasize'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }
        if (isset($map['StorageUtilization'])) {
            $model->storageUtilization = $map['StorageUtilization'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
