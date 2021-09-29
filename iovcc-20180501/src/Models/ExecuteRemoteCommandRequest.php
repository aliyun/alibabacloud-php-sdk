<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class ExecuteRemoteCommandRequest extends Model
{
    /**
     * @description 项目ID
     *
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @description 指令消息ID
     *
     * @var int
     */
    public $command;

    /**
     * @description 指令入参字符串
     *
     * @var string
     */
    public $params;
    protected $_name = [
        'projectId' => 'ProjectId',
        'clientId'  => 'ClientId',
        'command'   => 'Command',
        'params'    => 'Params',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteRemoteCommandRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        return $model;
    }
}
