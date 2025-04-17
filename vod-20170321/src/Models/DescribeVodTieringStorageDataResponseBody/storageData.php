<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTieringStorageDataResponseBody;

use AlibabaCloud\Dara\Model;

class storageData extends Model
{
    /**
     * @var int
     */
    public $lessthanMonthDatasize;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $storageClass;

    /**
     * @var int
     */
    public $storageUtilization;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'lessthanMonthDatasize' => 'LessthanMonthDatasize',
        'region' => 'Region',
        'storageClass' => 'StorageClass',
        'storageUtilization' => 'StorageUtilization',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
