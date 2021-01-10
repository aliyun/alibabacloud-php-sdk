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
    public $topicFullName;

    /**
     * @var string
     */
    public $messageContent;

    /**
     * @var string
     */
    public $responseTopic;

    /**
     * @var string
     */
    public $correlationData;

    /**
     * @var userProp[]
     */
    public $userProp;
    protected $_name = [
        'apiProduct'      => 'ApiProduct',
        'apiRevision'     => 'ApiRevision',
        'iotInstanceId'   => 'IotInstanceId',
        'productKey'      => 'ProductKey',
        'qos'             => 'Qos',
        'topicFullName'   => 'TopicFullName',
        'messageContent'  => 'MessageContent',
        'responseTopic'   => 'ResponseTopic',
        'correlationData' => 'CorrelationData',
        'userProp'        => 'UserProp',
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
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->qos) {
            $res['Qos'] = $this->qos;
        }
        if (null !== $this->topicFullName) {
            $res['TopicFullName'] = $this->topicFullName;
        }
        if (null !== $this->messageContent) {
            $res['MessageContent'] = $this->messageContent;
        }
        if (null !== $this->responseTopic) {
            $res['ResponseTopic'] = $this->responseTopic;
        }
        if (null !== $this->correlationData) {
            $res['CorrelationData'] = $this->correlationData;
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
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Qos'])) {
            $model->qos = $map['Qos'];
        }
        if (isset($map['TopicFullName'])) {
            $model->topicFullName = $map['TopicFullName'];
        }
        if (isset($map['MessageContent'])) {
            $model->messageContent = $map['MessageContent'];
        }
        if (isset($map['ResponseTopic'])) {
            $model->responseTopic = $map['ResponseTopic'];
        }
        if (isset($map['CorrelationData'])) {
            $model->correlationData = $map['CorrelationData'];
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
