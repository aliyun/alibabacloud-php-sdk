<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceGroupSchedulingRequest\fastScheduling;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceGroupSchedulingRequest\fineScheduling;
use AlibabaCloud\Tea\Model;

class CreateServiceGroupSchedulingRequest extends Model
{
    /**
     * @description 服务组ID
     *
     * @var int
     */
    public $serviceGroupId;

    /**
     * @description 排班方式 FAST 快速排班 FINE  精细排班
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
     * @description 精细排班
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
    protected $_name = [
        'serviceGroupId' => 'serviceGroupId',
        'schedulingWay'  => 'schedulingWay',
        'fastScheduling' => 'fastScheduling',
        'fineScheduling' => 'fineScheduling',
        'clientToken'    => 'clientToken',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceGroupSchedulingRequest
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

        return $model;
    }
}
