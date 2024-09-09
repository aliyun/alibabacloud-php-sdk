<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\producerInfo;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @example 2023-03-22 12:17:08
     *
     * @var string
     */
    public $arriveTime;

    /**
     * @example xx.xx.xx.xx
     *
     * @var string
     */
    public $clientHost;

    /**
     * @example 0A79275A00207A4F0F2916C92F9A0B94
     *
     * @var string
     */
    public $dlqOriginMessageId;

    /**
     * @example test_topic
     *
     * @var string
     */
    public $dlqOriginTopic;

    /**
     * @example CONSOLE
     *
     * @var string
     */
    public $messageSource;

    /**
     * @example 100
     *
     * @var int
     */
    public $produceDuration;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $produceStatus;

    /**
     * @example 2023-03-22 12:17:08
     *
     * @var string
     */
    public $produceTime;

    /**
     * @example xxx
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'arriveTime'         => 'arriveTime',
        'clientHost'         => 'clientHost',
        'dlqOriginMessageId' => 'dlqOriginMessageId',
        'dlqOriginTopic'     => 'dlqOriginTopic',
        'messageSource'      => 'messageSource',
        'produceDuration'    => 'produceDuration',
        'produceStatus'      => 'produceStatus',
        'produceTime'        => 'produceTime',
        'userName'           => 'userName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arriveTime) {
            $res['arriveTime'] = $this->arriveTime;
        }
        if (null !== $this->clientHost) {
            $res['clientHost'] = $this->clientHost;
        }
        if (null !== $this->dlqOriginMessageId) {
            $res['dlqOriginMessageId'] = $this->dlqOriginMessageId;
        }
        if (null !== $this->dlqOriginTopic) {
            $res['dlqOriginTopic'] = $this->dlqOriginTopic;
        }
        if (null !== $this->messageSource) {
            $res['messageSource'] = $this->messageSource;
        }
        if (null !== $this->produceDuration) {
            $res['produceDuration'] = $this->produceDuration;
        }
        if (null !== $this->produceStatus) {
            $res['produceStatus'] = $this->produceStatus;
        }
        if (null !== $this->produceTime) {
            $res['produceTime'] = $this->produceTime;
        }
        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arriveTime'])) {
            $model->arriveTime = $map['arriveTime'];
        }
        if (isset($map['clientHost'])) {
            $model->clientHost = $map['clientHost'];
        }
        if (isset($map['dlqOriginMessageId'])) {
            $model->dlqOriginMessageId = $map['dlqOriginMessageId'];
        }
        if (isset($map['dlqOriginTopic'])) {
            $model->dlqOriginTopic = $map['dlqOriginTopic'];
        }
        if (isset($map['messageSource'])) {
            $model->messageSource = $map['messageSource'];
        }
        if (isset($map['produceDuration'])) {
            $model->produceDuration = $map['produceDuration'];
        }
        if (isset($map['produceStatus'])) {
            $model->produceStatus = $map['produceStatus'];
        }
        if (isset($map['produceTime'])) {
            $model->produceTime = $map['produceTime'];
        }
        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}
