<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $concurrency;

    /**
     * @var string
     */
    public $chatbotInstanceId;
    protected $_name = [
        'instanceId'        => 'InstanceId',
        'description'       => 'Description',
        'concurrency'       => 'Concurrency',
        'chatbotInstanceId' => 'ChatbotInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }
        if (null !== $this->chatbotInstanceId) {
            $res['ChatbotInstanceId'] = $this->chatbotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }
        if (isset($map['ChatbotInstanceId'])) {
            $model->chatbotInstanceId = $map['ChatbotInstanceId'];
        }

        return $model;
    }
}
