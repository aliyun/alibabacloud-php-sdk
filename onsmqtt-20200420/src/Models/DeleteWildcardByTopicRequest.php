<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Dara\Model;

class DeleteWildcardByTopicRequest extends Model
{
    /**
     * @var string
     */
    public $firstTopic;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $wildcards;
    protected $_name = [
        'firstTopic' => 'FirstTopic',
        'instanceId' => 'InstanceId',
        'wildcards' => 'Wildcards',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->firstTopic) {
            $res['FirstTopic'] = $this->firstTopic;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->wildcards) {
            $res['Wildcards'] = $this->wildcards;
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
        if (isset($map['FirstTopic'])) {
            $model->firstTopic = $map['FirstTopic'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Wildcards'])) {
            $model->wildcards = $map['Wildcards'];
        }

        return $model;
    }
}
