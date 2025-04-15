<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\producerInfo;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $arriveTime;

    /**
     * @var string
     */
    public $clientHost;

    /**
     * @var string
     */
    public $dlqOriginMessageId;

    /**
     * @var string
     */
    public $dlqOriginTopic;

    /**
     * @var string
     */
    public $messageSource;

    /**
     * @var int
     */
    public $produceDuration;

    /**
     * @var string
     */
    public $produceStatus;

    /**
     * @var string
     */
    public $produceTime;

    /**
     * @var string
     */
    public $recallTime;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'arriveTime' => 'arriveTime',
        'clientHost' => 'clientHost',
        'dlqOriginMessageId' => 'dlqOriginMessageId',
        'dlqOriginTopic' => 'dlqOriginTopic',
        'messageSource' => 'messageSource',
        'produceDuration' => 'produceDuration',
        'produceStatus' => 'produceStatus',
        'produceTime' => 'produceTime',
        'recallTime' => 'recallTime',
        'userName' => 'userName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->recallTime) {
            $res['recallTime'] = $this->recallTime;
        }

        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
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

        if (isset($map['recallTime'])) {
            $model->recallTime = $map['recallTime'];
        }

        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}
