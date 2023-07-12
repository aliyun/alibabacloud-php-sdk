<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryConsumerGroupStatusResponse\clientConnectionStatusList;
use AlibabaCloud\Tea\Model;

class QueryConsumerGroupStatusResponse extends Model
{
    /**
     * @var int
     */
    public $accumulatedConsumeCountPerMinute;

    /**
     * @var int
     */
    public $accumulationCount;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $consumerSpeed;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $lastConsumerTime;

    /**
     * @var int
     */
    public $realTimeConsumeCountPerMinute;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var clientConnectionStatusList
     */
    public $clientConnectionStatusList;
    protected $_name = [
        'accumulatedConsumeCountPerMinute' => 'AccumulatedConsumeCountPerMinute',
        'accumulationCount'                => 'AccumulationCount',
        'code'                             => 'Code',
        'consumerSpeed'                    => 'ConsumerSpeed',
        'errorMessage'                     => 'ErrorMessage',
        'lastConsumerTime'                 => 'LastConsumerTime',
        'realTimeConsumeCountPerMinute'    => 'RealTimeConsumeCountPerMinute',
        'requestId'                        => 'RequestId',
        'success'                          => 'Success',
        'clientConnectionStatusList'       => 'ClientConnectionStatusList',
    ];

    public function validate()
    {
        Model::validateRequired('accumulatedConsumeCountPerMinute', $this->accumulatedConsumeCountPerMinute, true);
        Model::validateRequired('accumulationCount', $this->accumulationCount, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('consumerSpeed', $this->consumerSpeed, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
        Model::validateRequired('lastConsumerTime', $this->lastConsumerTime, true);
        Model::validateRequired('realTimeConsumeCountPerMinute', $this->realTimeConsumeCountPerMinute, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('clientConnectionStatusList', $this->clientConnectionStatusList, true);
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
        if (null !== $this->clientConnectionStatusList) {
            $res['ClientConnectionStatusList'] = null !== $this->clientConnectionStatusList ? $this->clientConnectionStatusList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryConsumerGroupStatusResponse
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
        if (isset($map['ClientConnectionStatusList'])) {
            $model->clientConnectionStatusList = clientConnectionStatusList::fromMap($map['ClientConnectionStatusList']);
        }

        return $model;
    }
}
