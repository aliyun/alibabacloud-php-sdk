<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class AsyncRRpcRequest extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $extInfo;

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
     * @var string
     */
    public $topicFullName;
    protected $_name = [
        'deviceName'     => 'DeviceName',
        'extInfo'        => 'ExtInfo',
        'iotInstanceId'  => 'IotInstanceId',
        'messageContent' => 'MessageContent',
        'productKey'     => 'ProductKey',
        'topicFullName'  => 'TopicFullName',
    ];

    public function validate()
    {
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('messageContent', $this->messageContent, true);
        Model::validateRequired('productKey', $this->productKey, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
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
        if (null !== $this->topicFullName) {
            $res['TopicFullName'] = $this->topicFullName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AsyncRRpcRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
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
        if (isset($map['TopicFullName'])) {
            $model->topicFullName = $map['TopicFullName'];
        }

        return $model;
    }
}
