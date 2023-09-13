<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\source;

use AlibabaCloud\Tea\Model;

class sourceDTSParameters extends Model
{
    /**
     * @description The URL and port number of the data subscription channel.
     *
     * @var string
     */
    public $brokerUrl;

    /**
     * @description The consumer offset. A consumer offset is a timestamp that indicates when the SDK client consumes the first data record. The value is a UNIX timestamp.
     *
     * @example 1620962769
     *
     * @var int
     */
    public $initCheckPoint;

    /**
     * @description The password of the consumer group.
     *
     * @example admin
     *
     * @var string
     */
    public $password;

    /**
     * @description The ID of the consumer group.
     *
     * @example hkprdb
     *
     * @var string
     */
    public $sid;

    /**
     * @description The task ID.
     *
     * @example f86e5814-b223-482c-b768-3b873297dade
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The topic to which you want to subscribe by using the data subscription channel.
     *
     * @example LTC_CACHE_PRD
     *
     * @var string
     */
    public $topic;

    /**
     * @description The username of the consumer group.
     *
     * @example admin
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'brokerUrl'      => 'BrokerUrl',
        'initCheckPoint' => 'InitCheckPoint',
        'password'       => 'Password',
        'sid'            => 'Sid',
        'taskId'         => 'TaskId',
        'topic'          => 'Topic',
        'username'       => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->brokerUrl) {
            $res['BrokerUrl'] = $this->brokerUrl;
        }
        if (null !== $this->initCheckPoint) {
            $res['InitCheckPoint'] = $this->initCheckPoint;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceDTSParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BrokerUrl'])) {
            $model->brokerUrl = $map['BrokerUrl'];
        }
        if (isset($map['InitCheckPoint'])) {
            $model->initCheckPoint = $map['InitCheckPoint'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
