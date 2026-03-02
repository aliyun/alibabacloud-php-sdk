<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MqTopicSubsDigest extends Model
{
    /**
     * @var string
     */
    public $messageModel;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $subsExpression;
    protected $_name = [
        'messageModel' => 'MessageModel',
        'serviceId' => 'ServiceId',
        'serviceName' => 'ServiceName',
        'subsExpression' => 'SubsExpression',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messageModel) {
            $res['MessageModel'] = $this->messageModel;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->subsExpression) {
            $res['SubsExpression'] = $this->subsExpression;
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
        if (isset($map['MessageModel'])) {
            $model->messageModel = $map['MessageModel'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['SubsExpression'])) {
            $model->subsExpression = $map['SubsExpression'];
        }

        return $model;
    }
}
