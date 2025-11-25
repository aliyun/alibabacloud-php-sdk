<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerTimeSpanResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $consumeTimeStamp;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $maxTimeStamp;

    /**
     * @var int
     */
    public $minTimeStamp;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'consumeTimeStamp' => 'ConsumeTimeStamp',
        'instanceId' => 'InstanceId',
        'maxTimeStamp' => 'MaxTimeStamp',
        'minTimeStamp' => 'MinTimeStamp',
        'topic' => 'Topic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumeTimeStamp) {
            $res['ConsumeTimeStamp'] = $this->consumeTimeStamp;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maxTimeStamp) {
            $res['MaxTimeStamp'] = $this->maxTimeStamp;
        }

        if (null !== $this->minTimeStamp) {
            $res['MinTimeStamp'] = $this->minTimeStamp;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
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
        if (isset($map['ConsumeTimeStamp'])) {
            $model->consumeTimeStamp = $map['ConsumeTimeStamp'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MaxTimeStamp'])) {
            $model->maxTimeStamp = $map['MaxTimeStamp'];
        }

        if (isset($map['MinTimeStamp'])) {
            $model->minTimeStamp = $map['MinTimeStamp'];
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
