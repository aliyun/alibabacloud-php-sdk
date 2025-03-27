<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosEventListResponseBody\ddosEventList;

use AlibabaCloud\Dara\Model;

class ddosEvent extends Model
{
    /**
     * @var string
     */
    public $ddosStatus;

    /**
     * @var string
     */
    public $ddosType;

    /**
     * @var int
     */
    public $delayTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $unBlackholeTime;
    protected $_name = [
        'ddosStatus' => 'DdosStatus',
        'ddosType' => 'DdosType',
        'delayTime' => 'DelayTime',
        'endTime' => 'EndTime',
        'startTime' => 'StartTime',
        'unBlackholeTime' => 'UnBlackholeTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ddosStatus) {
            $res['DdosStatus'] = $this->ddosStatus;
        }

        if (null !== $this->ddosType) {
            $res['DdosType'] = $this->ddosType;
        }

        if (null !== $this->delayTime) {
            $res['DelayTime'] = $this->delayTime;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->unBlackholeTime) {
            $res['UnBlackholeTime'] = $this->unBlackholeTime;
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
        if (isset($map['DdosStatus'])) {
            $model->ddosStatus = $map['DdosStatus'];
        }

        if (isset($map['DdosType'])) {
            $model->ddosType = $map['DdosType'];
        }

        if (isset($map['DelayTime'])) {
            $model->delayTime = $map['DelayTime'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['UnBlackholeTime'])) {
            $model->unBlackholeTime = $map['UnBlackholeTime'];
        }

        return $model;
    }
}
