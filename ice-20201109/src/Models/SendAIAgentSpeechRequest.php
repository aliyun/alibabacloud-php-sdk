<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SendAIAgentSpeechRequest extends Model
{
    /**
     * @var bool
     */
    public $enableInterrupt;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'enableInterrupt' => 'EnableInterrupt',
        'instanceId'      => 'InstanceId',
        'text'            => 'Text',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableInterrupt) {
            $res['EnableInterrupt'] = $this->enableInterrupt;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
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
        if (isset($map['EnableInterrupt'])) {
            $model->enableInterrupt = $map['EnableInterrupt'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
