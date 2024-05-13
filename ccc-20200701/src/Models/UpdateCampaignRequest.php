<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class UpdateCampaignRequest extends Model
{
    /**
     * @example [
     * ]
     * @var string
     */
    public $callableTime;

    /**
     * @description This parameter is required.
     *
     * @example ab11908b-6ebc-4b0c-b51e-3e17c7060
     *
     * @var string
     */
    public $campaignId;

    /**
     * @example 3a310f56-4d30-4081-ba24-5d87a3b7262e
     *
     * @var string
     */
    public $contactFlowId;

    /**
     * @example 1689933600000
     *
     * @var string
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 1689901200000
     *
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $strategyParameters;
    protected $_name = [
        'callableTime'       => 'CallableTime',
        'campaignId'         => 'CampaignId',
        'contactFlowId'      => 'ContactFlowId',
        'endTime'            => 'EndTime',
        'instanceId'         => 'InstanceId',
        'name'               => 'Name',
        'startTime'          => 'StartTime',
        'strategyParameters' => 'StrategyParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callableTime) {
            $res['CallableTime'] = $this->callableTime;
        }
        if (null !== $this->campaignId) {
            $res['CampaignId'] = $this->campaignId;
        }
        if (null !== $this->contactFlowId) {
            $res['ContactFlowId'] = $this->contactFlowId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->strategyParameters) {
            $res['StrategyParameters'] = $this->strategyParameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCampaignRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallableTime'])) {
            $model->callableTime = $map['CallableTime'];
        }
        if (isset($map['CampaignId'])) {
            $model->campaignId = $map['CampaignId'];
        }
        if (isset($map['ContactFlowId'])) {
            $model->contactFlowId = $map['ContactFlowId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StrategyParameters'])) {
            $model->strategyParameters = $map['StrategyParameters'];
        }

        return $model;
    }
}
