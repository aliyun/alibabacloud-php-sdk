<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class SendRenderingInstanceCommandsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example date;ls -l /tmp
     *
     * @var string
     */
    public $commands;

    /**
     * @var string
     */
    public $mode;

    /**
     * @description This parameter is required.
     *
     * @example render-9f8c57355d224ad7beaf95e145f22111
     *
     * @var string
     */
    public $renderingInstanceId;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'commands' => 'Commands',
        'mode' => 'Mode',
        'renderingInstanceId' => 'RenderingInstanceId',
        'timeout' => 'Timeout',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commands) {
            $res['Commands'] = $this->commands;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendRenderingInstanceCommandsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Commands'])) {
            $model->commands = $map['Commands'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
