<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingPreviewRequest\fastScheduling;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingPreviewRequest\fineScheduling;
use AlibabaCloud\Tea\Model;

class GetServiceGroupSchedulingPreviewRequest extends Model
{
    /**
     * @description 服务组ID
     *
     * @var int
     */
    public $serviceGroupId;

    /**
     * @description 排班方式 FAST 快速排班 FINE 精细排班
     *
     * @var string
     */
    public $schedulingWay;

    /**
     * @description 快速排班
     *
     * @var fastScheduling
     */
    public $fastScheduling;

    /**
     * @description 精细排
     *
     * @var fineScheduling
     */
    public $fineScheduling;

    /**
     * @description 幂等号
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 排班结束时间
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 排班开始时间
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'serviceGroupId' => 'serviceGroupId',
        'schedulingWay'  => 'schedulingWay',
        'fastScheduling' => 'fastScheduling',
        'fineScheduling' => 'fineScheduling',
        'clientToken'    => 'clientToken',
        'endTime'        => 'endTime',
        'startTime'      => 'startTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }
        if (null !== $this->schedulingWay) {
            $res['schedulingWay'] = $this->schedulingWay;
        }
        if (null !== $this->fastScheduling) {
            $res['fastScheduling'] = null !== $this->fastScheduling ? $this->fastScheduling->toMap() : null;
        }
        if (null !== $this->fineScheduling) {
            $res['fineScheduling'] = null !== $this->fineScheduling ? $this->fineScheduling->toMap() : null;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceGroupSchedulingPreviewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }
        if (isset($map['schedulingWay'])) {
            $model->schedulingWay = $map['schedulingWay'];
        }
        if (isset($map['fastScheduling'])) {
            $model->fastScheduling = fastScheduling::fromMap($map['fastScheduling']);
        }
        if (isset($map['fineScheduling'])) {
            $model->fineScheduling = fineScheduling::fromMap($map['fineScheduling']);
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
