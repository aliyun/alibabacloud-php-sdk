<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceGroupSchedulingRequest\fastScheduling;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceGroupSchedulingRequest\fineScheduling;
use AlibabaCloud\Tea\Model;

class CreateServiceGroupSchedulingRequest extends Model
{
    /**
     * @example C4BE3837-1A13-413B-A225-2C88188E8A43
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 12
     *
     * @var fastScheduling
     */
    public $fastScheduling;

    /**
     * @var fineScheduling
     */
    public $fineScheduling;

    /**
     * @example FAST
     *
     * @var string
     */
    public $schedulingWay;

    /**
     * @example 1000
     *
     * @var int
     */
    public $serviceGroupId;
    protected $_name = [
        'clientToken'    => 'clientToken',
        'fastScheduling' => 'fastScheduling',
        'fineScheduling' => 'fineScheduling',
        'schedulingWay'  => 'schedulingWay',
        'serviceGroupId' => 'serviceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->fastScheduling) {
            $res['fastScheduling'] = null !== $this->fastScheduling ? $this->fastScheduling->toMap() : null;
        }
        if (null !== $this->fineScheduling) {
            $res['fineScheduling'] = null !== $this->fineScheduling ? $this->fineScheduling->toMap() : null;
        }
        if (null !== $this->schedulingWay) {
            $res['schedulingWay'] = $this->schedulingWay;
        }
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
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
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['fastScheduling'])) {
            $model->fastScheduling = fastScheduling::fromMap($map['fastScheduling']);
        }
        if (isset($map['fineScheduling'])) {
            $model->fineScheduling = fineScheduling::fromMap($map['fineScheduling']);
        }
        if (isset($map['schedulingWay'])) {
            $model->schedulingWay = $map['schedulingWay'];
        }
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }

        return $model;
    }
}
