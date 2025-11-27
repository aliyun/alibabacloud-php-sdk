<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeErrorLogsResponseBody\items;

use AlibabaCloud\Dara\Model;

class errorLog extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $errorInfo;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $userIp;
    protected $_name = [
        'createTime' => 'CreateTime',
        'database' => 'Database',
        'errorInfo' => 'ErrorInfo',
        'user' => 'User',
        'userIp' => 'UserIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }

        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = $this->errorInfo;
        }

        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        if (null !== $this->userIp) {
            $res['UserIp'] = $this->userIp;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }

        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = $map['ErrorInfo'];
        }

        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        if (isset($map['UserIp'])) {
            $model->userIp = $map['UserIp'];
        }

        return $model;
    }
}
