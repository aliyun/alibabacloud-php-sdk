<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryConsumerGroupStatusResponseBody\clientConnectionStatusList;
use AlibabaCloud\Tea\Model;

class QueryConsumerGroupStatusResponseBody extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $accumulatedConsumeCountPerMinute;

    /**
     * @example 13
     *
     * @var int
     */
    public $accumulationCount;

    /**
     * @var clientConnectionStatusList
     */
    public $clientConnectionStatusList;

    /**
     * @example iot.system.SystemException
     *
     * @var string
     */
    public $code;

    /**
     * @example 14
     *
     * @var int
     */
    public $consumerSpeed;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @example 2020-05-29T03:37:56.000Z
     *
     * @var string
     */
    public $lastConsumerTime;

    /**
     * @example 14
     *
     * @var int
     */
    public $realTimeConsumeCountPerMinute;

    /**
     * @example E55E50B7-40EE-4B6B-8BBE-D3ED55CCF565
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'accumulatedConsumeCountPerMinute' => 'AccumulatedConsumeCountPerMinute',
        'accumulationCount'                => 'AccumulationCount',
        'clientConnectionStatusList'       => 'ClientConnectionStatusList',
        'code'                             => 'Code',
        'consumerSpeed'                    => 'ConsumerSpeed',
        'errorMessage'                     => 'ErrorMessage',
        'lastConsumerTime'                 => 'LastConsumerTime',
        'realTimeConsumeCountPerMinute'    => 'RealTimeConsumeCountPerMinute',
        'requestId'                        => 'RequestId',
        'success'                          => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accumulatedConsumeCountPerMinute) {
            $res['AccumulatedConsumeCountPerMinute'] = $this->accumulatedConsumeCountPerMinute;
        }
        if (null !== $this->accumulationCount) {
            $res['AccumulationCount'] = $this->accumulationCount;
        }
        if (null !== $this->clientConnectionStatusList) {
            $res['ClientConnectionStatusList'] = null !== $this->clientConnectionStatusList ? $this->clientConnectionStatusList->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->consumerSpeed) {
            $res['ConsumerSpeed'] = $this->consumerSpeed;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->lastConsumerTime) {
            $res['LastConsumerTime'] = $this->lastConsumerTime;
        }
        if (null !== $this->realTimeConsumeCountPerMinute) {
            $res['RealTimeConsumeCountPerMinute'] = $this->realTimeConsumeCountPerMinute;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryConsumerGroupStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccumulatedConsumeCountPerMinute'])) {
            $model->accumulatedConsumeCountPerMinute = $map['AccumulatedConsumeCountPerMinute'];
        }
        if (isset($map['AccumulationCount'])) {
            $model->accumulationCount = $map['AccumulationCount'];
        }
        if (isset($map['ClientConnectionStatusList'])) {
            $model->clientConnectionStatusList = clientConnectionStatusList::fromMap($map['ClientConnectionStatusList']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ConsumerSpeed'])) {
            $model->consumerSpeed = $map['ConsumerSpeed'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['LastConsumerTime'])) {
            $model->lastConsumerTime = $map['LastConsumerTime'];
        }
        if (isset($map['RealTimeConsumeCountPerMinute'])) {
            $model->realTimeConsumeCountPerMinute = $map['RealTimeConsumeCountPerMinute'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
