<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models;

use AlibabaCloud\Dara\Model;

class GetInspectProgressRequest extends Model
{
    /**
     * @var int
     */
    public $assumeAliyunId;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'assumeAliyunId' => 'AssumeAliyunId',
        'taskId' => 'TaskId',
        'token' => 'Token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assumeAliyunId) {
            $res['AssumeAliyunId'] = $this->assumeAliyunId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['AssumeAliyunId'])) {
            $model->assumeAliyunId = $map['AssumeAliyunId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
