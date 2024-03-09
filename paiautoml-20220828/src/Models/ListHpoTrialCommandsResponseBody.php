<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models;

use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\ListHpoTrialCommandsResponseBody\commands;
use AlibabaCloud\Tea\Model;

class ListHpoTrialCommandsResponseBody extends Model
{
    /**
     * @example INVALID_USER_OR_EXP
     *
     * @var string
     */
    public $code;

    /**
     * @var commands[]
     */
    public $commands;

    /**
     * @var string[]
     */
    public $detail;

    /**
     * @example Missing \"user_id\" in request.
     *
     * @var string
     */
    public $message;

    /**
     * @example 071A904D-5A49-597F-9F69-81C7701D04AC
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'commands'  => 'Commands',
        'detail'    => 'Detail',
        'message'   => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->commands) {
            $res['Commands'] = [];
            if (null !== $this->commands && \is_array($this->commands)) {
                $n = 0;
                foreach ($this->commands as $item) {
                    $res['Commands'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHpoTrialCommandsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Commands'])) {
            if (!empty($map['Commands'])) {
                $model->commands = [];
                $n               = 0;
                foreach ($map['Commands'] as $item) {
                    $model->commands[$n++] = null !== $item ? commands::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
