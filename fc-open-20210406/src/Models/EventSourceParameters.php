<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\SourceMNSParameters;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\SourceRabbitMQParameters;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\SourceRocketMQParameters;

class EventSourceParameters extends Model {
    protected $_name = [
        'sourceMNSParameters' => 'sourceMNSParameters',
        'sourceRabbitMQParameters' => 'sourceRabbitMQParameters',
        'sourceRocketMQParameters' => 'sourceRocketMQParameters',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->sourceMNSParameters) {
            $res['sourceMNSParameters'] = null !== $this->sourceMNSParameters ? $this->sourceMNSParameters->toMap() : null;
        }
        if (null !== $this->sourceRabbitMQParameters) {
            $res['sourceRabbitMQParameters'] = null !== $this->sourceRabbitMQParameters ? $this->sourceRabbitMQParameters->toMap() : null;
        }
        if (null !== $this->sourceRocketMQParameters) {
            $res['sourceRocketMQParameters'] = null !== $this->sourceRocketMQParameters ? $this->sourceRocketMQParameters->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return EventSourceParameters
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['sourceMNSParameters'])){
            $model->sourceMNSParameters = SourceMNSParameters::fromMap($map['sourceMNSParameters']);
        }
        if(isset($map['sourceRabbitMQParameters'])){
            $model->sourceRabbitMQParameters = SourceRabbitMQParameters::fromMap($map['sourceRabbitMQParameters']);
        }
        if(isset($map['sourceRocketMQParameters'])){
            $model->sourceRocketMQParameters = SourceRocketMQParameters::fromMap($map['sourceRocketMQParameters']);
        }
        return $model;
    }
    /**
     * @var SourceMNSParameters
     */
    public $sourceMNSParameters;

    /**
     * @var SourceRabbitMQParameters
     */
    public $sourceRabbitMQParameters;

    /**
     * @var SourceRocketMQParameters
     */
    public $sourceRocketMQParameters;

}
