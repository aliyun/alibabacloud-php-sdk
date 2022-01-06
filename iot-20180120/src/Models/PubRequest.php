<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\PubRequest\userProp;
use AlibabaCloud\Tea\Model;

class PubRequest extends Model
{
    /**
     * @var string
     */
    public $correlationData;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $messageContent;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var int
     */
    public $qos;

    /**
     * @var string
     */
    public $responseTopic;

    /**
     * @var string
     */
    public $topicFullName;

    /**
     * @var userProp[]
     */
    public $userProp;
    protected $_name = [
        'correlationData' => 'CorrelationData',
        'iotInstanceId'   => 'IotInstanceId',
        'messageContent'  => 'MessageContent',
        'productKey'      => 'ProductKey',
        'qos'             => 'Qos',
        'responseTopic'   => 'ResponseTopic',
        'topicFullName'   => 'TopicFullName',
        'userProp'        => 'UserProp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->correlationData) {
            $res['CorrelationData'] = $this->correlationData;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->messageContent) {
            $res['MessageContent'] = $this->messageContent;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->qos) {
            $res['Qos'] = $this->qos;
        }
        if (null !== $this->responseTopic) {
            $res['ResponseTopic'] = $this->responseTopic;
        }
        if (null !== $this->topicFullName) {
            $res['TopicFullName'] = $this->topicFullName;
        }
        if (null !== $this->userProp) {
            $res['UserProp'] = [];
            if (null !== $this->userProp && \is_array($this->userProp)) {
                $n = 0;
                foreach ($this->userProp as $item) {
                    $res['UserProp'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PubRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorrelationData'])) {
            $model->correlationData = $map['CorrelationData'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['MessageContent'])) {
            $model->messageContent = $map['MessageContent'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Qos'])) {
            $model->qos = $map['Qos'];
        }
        if (isset($map['ResponseTopic'])) {
            $model->responseTopic = $map['ResponseTopic'];
        }
        if (isset($map['TopicFullName'])) {
            $model->topicFullName = $map['TopicFullName'];
        }
        if (isset($map['UserProp'])) {
            if (!empty($map['UserProp'])) {
                $model->userProp = [];
                $n               = 0;
                foreach ($map['UserProp'] as $item) {
                    $model->userProp[$n++] = null !== $item ? userProp::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
