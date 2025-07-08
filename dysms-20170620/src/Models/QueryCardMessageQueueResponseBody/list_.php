<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QueryCardMessageQueueResponseBody;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var bool
     */
    public $isCreated;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $queueType;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'isCreated' => 'IsCreated',
        'queueName' => 'QueueName',
        'queueType' => 'QueueType',
        'region' => 'Region',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isCreated) {
            $res['IsCreated'] = $this->isCreated;
        }

        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }

        if (null !== $this->queueType) {
            $res['QueueType'] = $this->queueType;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
        if (isset($map['IsCreated'])) {
            $model->isCreated = $map['IsCreated'];
        }

        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        if (isset($map['QueueType'])) {
            $model->queueType = $map['QueueType'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
