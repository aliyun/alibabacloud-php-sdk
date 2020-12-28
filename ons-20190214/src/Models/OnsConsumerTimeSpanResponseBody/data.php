<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerTimeSpanResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $maxTimeStamp;

    /**
     * @var int
     */
    public $consumeTimeStamp;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var int
     */
    public $minTimeStamp;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'maxTimeStamp'     => 'MaxTimeStamp',
        'consumeTimeStamp' => 'ConsumeTimeStamp',
        'topic'            => 'Topic',
        'minTimeStamp'     => 'MinTimeStamp',
        'instanceId'       => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxTimeStamp) {
            $res['MaxTimeStamp'] = $this->maxTimeStamp;
        }
        if (null !== $this->consumeTimeStamp) {
            $res['ConsumeTimeStamp'] = $this->consumeTimeStamp;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->minTimeStamp) {
            $res['MinTimeStamp'] = $this->minTimeStamp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxTimeStamp'])) {
            $model->maxTimeStamp = $map['MaxTimeStamp'];
        }
        if (isset($map['ConsumeTimeStamp'])) {
            $model->consumeTimeStamp = $map['ConsumeTimeStamp'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['MinTimeStamp'])) {
            $model->minTimeStamp = $map['MinTimeStamp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
