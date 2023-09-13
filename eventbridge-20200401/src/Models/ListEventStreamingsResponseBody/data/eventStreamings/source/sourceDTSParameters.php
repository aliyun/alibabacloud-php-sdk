<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source;

use AlibabaCloud\Tea\Model;

class sourceDTSParameters extends Model
{
    /**
     * @var string
     */
    public $brokerUrl;

    /**
     * @example 1620962769
     *
     * @var string
     */
    public $initCheckPoint;

    /**
     * @example 123456
     *
     * @var string
     */
    public $password;

    /**
     * @example HG9
     *
     * @var string
     */
    public $sid;

    /**
     * @example 1611b337285f44e2936a2c4170bbbb7f
     *
     * @var string
     */
    public $taskId;

    /**
     * @example TP_TEST_UNDERWRITE_ISSUE
     *
     * @var string
     */
    public $topic;

    /**
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
