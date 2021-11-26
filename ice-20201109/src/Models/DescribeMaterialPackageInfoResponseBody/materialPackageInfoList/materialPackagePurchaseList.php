<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMaterialPackageInfoResponseBody\materialPackageInfoList;

use AlibabaCloud\Tea\Model;

class materialPackagePurchaseList extends Model
{
    /**
     * @var string
     */
    public $currCapacity;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $initCapacity;

    /**
     * @var string
     */
    public $remainingAuthTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'currCapacity'      => 'CurrCapacity',
        'endTime'           => 'EndTime',
        'initCapacity'      => 'InitCapacity',
        'remainingAuthTime' => 'RemainingAuthTime',
        'startTime'         => 'StartTime',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currCapacity) {
            $res['CurrCapacity'] = $this->currCapacity;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->initCapacity) {
            $res['InitCapacity'] = $this->initCapacity;
        }
        if (null !== $this->remainingAuthTime) {
            $res['RemainingAuthTime'] = $this->remainingAuthTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return materialPackagePurchaseList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrCapacity'])) {
            $model->currCapacity = $map['CurrCapacity'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InitCapacity'])) {
            $model->initCapacity = $map['InitCapacity'];
        }
        if (isset($map['RemainingAuthTime'])) {
            $model->remainingAuthTime = $map['RemainingAuthTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
