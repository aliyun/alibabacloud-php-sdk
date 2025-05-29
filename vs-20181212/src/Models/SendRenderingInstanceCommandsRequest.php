<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class SendRenderingInstanceCommandsRequest extends Model
{
    /**
     * @var string
     */
    public $commands;

    /**
     * @var string
     */
    public $renderingInstanceId;
    protected $_name = [
        'commands' => 'Commands',
        'renderingInstanceId' => 'RenderingInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commands) {
            $res['Commands'] = $this->commands;
        }

        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
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
        if (isset($map['Commands'])) {
            $model->commands = $map['Commands'];
        }

        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }

        return $model;
    }
}
