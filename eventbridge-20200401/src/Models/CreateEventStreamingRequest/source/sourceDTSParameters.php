<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\source;

use AlibabaCloud\Tea\Model;

class sourceDTSParameters extends Model
{
    /**
     * @description The URL and port number of the change tracking instance.
     *
     * @var string
     */
    public $brokerUrl;

    /**
     * @description The UNIX timestamp that is generated when the SDK client consumes the first data record.
     *
     * @example 1620962769
     *
     * @var int
     */
    public $initCheckPoint;

    /**
     * @description The consumer group password.
     *
     * @example admin
     *
     * @var string
     */
    public $password;

    /**
     * @description The consumer group ID.
     *
     * @example HD3
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
     * @description The name of the tracked topic of the change tracking instance.
     *
     * @example LTC_CACHE_PRD
     *
     * @var string
     */
    public $topic;

    /**
     * @description The consumer group username.
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
