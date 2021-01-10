<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class PublishMqttMessageRequest extends Model
{
    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $qoS;
    protected $_name = [
        'appKey'    => 'AppKey',
        'topic'     => 'Topic',
        'projectId' => 'ProjectId',
        'message'   => 'Message',
        'qoS'       => 'QoS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->qoS) {
            $res['QoS'] = $this->qoS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishMqttMessageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['QoS'])) {
            $model->qoS = $map['QoS'];
        }

        return $model;
    }
}
