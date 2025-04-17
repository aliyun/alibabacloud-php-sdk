<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class DescribeVodTieringStorageRetrievalDataRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $storageClass;
    protected $_name = [
        'appId' => 'AppId',
        'endTime' => 'EndTime',
        'ownerId' => 'OwnerId',
        'region' => 'Region',
        'startTime' => 'StartTime',
        'storageClass' => 'StorageClass',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }

        return $model;
    }
}
