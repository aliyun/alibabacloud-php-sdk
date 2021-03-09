<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BatchPubRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string[]
     */
    public $deviceName;

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
    public $topicShortName;

    /**
     * @var string
     */
    public $messageContent;
    protected $_name = [
        'apiProduct'     => 'ApiProduct',
        'apiRevision'    => 'ApiRevision',
        'iotInstanceId'  => 'IotInstanceId',
        'deviceName'     => 'DeviceName',
        'productKey'     => 'ProductKey',
        'qos'            => 'Qos',
        'topicShortName' => 'TopicShortName',
        'messageContent' => 'MessageContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->qos) {
            $res['Qos'] = $this->qos;
        }
        if (null !== $this->topicShortName) {
            $res['TopicShortName'] = $this->topicShortName;
        }
        if (null !== $this->messageContent) {
            $res['MessageContent'] = $this->messageContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchPubRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['DeviceName'])) {
            if (!empty($map['DeviceName'])) {
                $model->deviceName = $map['DeviceName'];
            }
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Qos'])) {
            $model->qos = $map['Qos'];
        }
        if (isset($map['TopicShortName'])) {
            $model->topicShortName = $map['TopicShortName'];
        }
        if (isset($map['MessageContent'])) {
            $model->messageContent = $map['MessageContent'];
        }

        return $model;
    }
}
