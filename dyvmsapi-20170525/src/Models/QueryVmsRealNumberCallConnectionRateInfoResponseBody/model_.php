<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVmsRealNumberCallConnectionRateInfoResponseBody;

use AlibabaCloud\Dara\Model;

class model_ extends Model
{
    /**
     * @var float
     */
    public $callConnectionRate;

    /**
     * @var int
     */
    public $completeCount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $requestCount;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var int
     */
    public $ringingCount;

    /**
     * @var float
     */
    public $ringingRate;
    protected $_name = [
        'callConnectionRate' => 'CallConnectionRate',
        'completeCount' => 'CompleteCount',
        'regionId' => 'RegionId',
        'requestCount' => 'RequestCount',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
        'ringingCount' => 'RingingCount',
        'ringingRate' => 'RingingRate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callConnectionRate) {
            $res['CallConnectionRate'] = $this->callConnectionRate;
        }

        if (null !== $this->completeCount) {
            $res['CompleteCount'] = $this->completeCount;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestCount) {
            $res['RequestCount'] = $this->requestCount;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->ringingCount) {
            $res['RingingCount'] = $this->ringingCount;
        }

        if (null !== $this->ringingRate) {
            $res['RingingRate'] = $this->ringingRate;
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
        if (isset($map['CallConnectionRate'])) {
            $model->callConnectionRate = $map['CallConnectionRate'];
        }

        if (isset($map['CompleteCount'])) {
            $model->completeCount = $map['CompleteCount'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestCount'])) {
            $model->requestCount = $map['RequestCount'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['RingingCount'])) {
            $model->ringingCount = $map['RingingCount'];
        }

        if (isset($map['RingingRate'])) {
            $model->ringingRate = $map['RingingRate'];
        }

        return $model;
    }
}
