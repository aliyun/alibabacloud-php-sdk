<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDtsJobDetailRequest extends Model
{
    /**
     * @var string
     */
    public $dtsInstanceID;

    /**
     * @var string
     */
    public $dtsJobId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description 是否返回所有的同步子任务
     *
     * @var bool
     */
    public $syncSubJobHistory;

    /**
     * @var string
     */
    public $synchronizationDirection;
    protected $_name = [
        'dtsInstanceID'            => 'DtsInstanceID',
        'dtsJobId'                 => 'DtsJobId',
        'regionId'                 => 'RegionId',
        'syncSubJobHistory'        => 'SyncSubJobHistory',
        'synchronizationDirection' => 'SynchronizationDirection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dtsInstanceID) {
            $res['DtsInstanceID'] = $this->dtsInstanceID;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->syncSubJobHistory) {
            $res['SyncSubJobHistory'] = $this->syncSubJobHistory;
        }
        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDtsJobDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsInstanceID'])) {
            $model->dtsInstanceID = $map['DtsInstanceID'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SyncSubJobHistory'])) {
            $model->syncSubJobHistory = $map['SyncSubJobHistory'];
        }
        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }

        return $model;
    }
}
