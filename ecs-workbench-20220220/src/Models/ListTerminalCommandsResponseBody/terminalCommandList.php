<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\ListTerminalCommandsResponseBody;

use AlibabaCloud\Dara\Model;

class terminalCommandList extends Model
{
    /**
     * @var string
     */
    public $commandLine;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $executePath;

    /**
     * @var string
     */
    public $loginUser;
    protected $_name = [
        'commandLine' => 'CommandLine',
        'createTime' => 'CreateTime',
        'executePath' => 'ExecutePath',
        'loginUser' => 'LoginUser',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commandLine) {
            $res['CommandLine'] = $this->commandLine;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->executePath) {
            $res['ExecutePath'] = $this->executePath;
        }

        if (null !== $this->loginUser) {
            $res['LoginUser'] = $this->loginUser;
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
        if (isset($map['CommandLine'])) {
            $model->commandLine = $map['CommandLine'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ExecutePath'])) {
            $model->executePath = $map['ExecutePath'];
        }

        if (isset($map['LoginUser'])) {
            $model->loginUser = $map['LoginUser'];
        }

        return $model;
    }
}
