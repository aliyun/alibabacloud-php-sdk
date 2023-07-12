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
    public $contentType;

    /**
     * @var string
     */
    public $correlationData;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $messageContent;

    /**
     * @var int
     */
    public $messageExpiryInterval;

    /**
     * @var int
     */
    public $payloadFormatIndicator;

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
     * @var bool
     */
    public $retained;

    /**
     * @var string
     */
    public $topicFullName;

    /**
     * @var userProp[]
     */
    public $userProp;
    protected $_name = [
        'contentType'            => 'ContentType',
        'correlationData'        => 'CorrelationData',
        'deviceName'             => 'DeviceName',
        'iotInstanceId'          => 'IotInstanceId',
        'messageContent'         => 'MessageContent',
        'messageExpiryInterval'  => 'MessageExpiryInterval',
        'payloadFormatIndicator' => 'PayloadFormatIndicator',
        'productKey'             => 'ProductKey',
        'qos'                    => 'Qos',
        'responseTopic'          => 'ResponseTopic',
        'retained'               => 'Retained',
        'topicFullName'          => 'TopicFullName',
        'userProp'               => 'UserProp',
    ];

    public function validate()
    {
        Model::validateRequired('messageContent', $this->messageContent, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('topicFullName', $this->topicFullName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->correlationData) {
            $res['CorrelationData'] = $this->correlationData;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->messageContent) {
            $res['MessageContent'] = $this->messageContent;
        }
        if (null !== $this->messageExpiryInterval) {
            $res['MessageExpiryInterval'] = $this->messageExpiryInterval;
        }
        if (null !== $this->payloadFormatIndicator) {
            $res['PayloadFormatIndicator'] = $this->payloadFormatIndicator;
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
        if (null !== $this->retained) {
            $res['Retained'] = $this->retained;
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
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['CorrelationData'])) {
            $model->correlationData = $map['CorrelationData'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['MessageContent'])) {
            $model->messageContent = $map['MessageContent'];
        }
        if (isset($map['MessageExpiryInterval'])) {
            $model->messageExpiryInterval = $map['MessageExpiryInterval'];
        }
        if (isset($map['PayloadFormatIndicator'])) {
            $model->payloadFormatIndicator = $map['PayloadFormatIndicator'];
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
        if (isset($map['Retained'])) {
            $model->retained = $map['Retained'];
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
